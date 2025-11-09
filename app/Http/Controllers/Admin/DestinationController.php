<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\DestinationCategory;
use App\Models\Destination;
use App\Models\Media;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;




class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        menuSubmenu('destination', 'allDestinations');
        $data['newses'] = Destination::latest()->paginate(50);
        return view('admin.destinations.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function destinationActive(Request $request)
    {
        if ($request->mode == 'true') {
            DB::table('destination_posts')->where('id', $request->id)->update(['active' => 1, 'status' => 'published']);
        } else {
            DB::table('destination_posts')->where('id', $request->id)->update(['active' => 0, 'status' => 'pending']);
        }
        return response()->json(['msg' => 'Successfully updated status', 'status' => true]);
    }

    public function create()
    {
        menuSubmenu('destination', 'storeDestinations');
        $data['categories'] = DestinationCategory::all();
        $data['writers'] = User::where('writer', 1)->get();
        $data['medias'] = Media::latest()->paginate(20);
        return view('admin.destinations.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        menuSubmenu('destination', 'storeDestinations');

        $this->validate($request, [
            'title' => 'required|string',
            'slug' => 'required|string| unique:destinations,slug',
            'category_id' => 'required',
            'excerpt' => 'nullable|string',
            'description' => 'nullable|string',
            'feature_image' => 'nullable|image|mimes:jpeg,webp,jpg,png',
        ]);

        if ($request->hasFile('feature_image')) {
            $image = $request->file('feature_image');
            $image_ex =  $image->getClientOriginalExtension();
            $file_path = date('ymdhis') . '.' . $image_ex;
            Image::make($image)->resize(360, 240);
            $image->storeAs('destination_images', $file_path, 'public');
        } else {
            $file_path =  null;
        }


        $blogPost = new Destination();
        $blogPost->title = $request->title;
        $blogPost->slug = $request->slug;
        $blogPost->category_id = $request->category_id;
        $blogPost->excerpt = $request->excerpt;
        $blogPost->description = $request->description;
        $blogPost->tags = $request->tags;
        $blogPost->active = $request->active ?? 0;
        $blogPost->editor = $request->editor ?? 0;
        $blogPost->featured_slider = $request->featured_slider ?? 0;
        $blogPost->addedby_id = Auth::id();
        $blogPost->feature_image = $file_path;
        $blogPost->save();


        Session::flash('success', 'News Create Successfully');
        return redirect()->route('destinations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        menuSubmenu('destination', 'allDestinations');
        return view('admin.destinations.view', ['news' => Destination::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        menuSubmenu('destination', 'allDestinations');

        $data['news'] = Destination::find($id);
        $data['categories'] = DestinationCategory::Where('active', 1)->get();
        $data['writers']    = User::where('writer', 1)->get();
        $data['medias'] = Media::latest()->paginate(20);
        $data['ots'] = $data['news']->tags ? explode(", ", $data['news']->tags) : null;
        $data['authors'] = $data['news']->authors ? explode(", ", $data['news']->authors) : null;
        return view('admin.destinations.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        menuSubmenu('destination', 'storeDestinations');

        $this->validate($request, [
            'title' => 'required|string',
            'slug' => 'required|string|unique:destinations,slug,' . $id,
            'excerpt' => 'nullable|string',
            'category_id' => 'required',
            'description' => 'nullable|string',
            'status' => 'required',
            'feature_image' => 'nullable|image|sometimes|mimes:jpeg,webp,jpg,png',

        ]);

        $blogPost = Destination::find($id);

        try {
            if ($request->hasFile('feature_image')) {
                if ($blogPost->feature_image) {
                    Storage::delete('public/destination_images/' . $blogPost->feature_image);
                }
                $image = $request->file('feature_image');
                $image_ex =  $image->getClientOriginalExtension();
                $file_path = date('ymdhis') . '.' . $image_ex;
                Image::make($image)->resize(360, 240);
                $image->storeAs('destination_images', $file_path, 'public');
            } else {
                $file_path =  $blogPost->feature_image;
            }

            $blogPost->title = $request->title;
            $blogPost->slug = $request->slug;
            $blogPost->category_id = $request->category_id;
            $blogPost->excerpt = $request->excerpt;
            $blogPost->description = $request->description;
            $blogPost->tags = $request->tags;
            $blogPost->active = $request->active ?? 0;
            $blogPost->editor = $request->editor ?? 0;
            $blogPost->featured_slider = $request->featured_slider ?? 0;
            $blogPost->status = $request->status ?? 'pending';
            $blogPost->editedby_id = Auth::id();
            $blogPost->feature_image = $file_path;
            $blogPost->save();
        
            Session::flash('success', 'News update Successfully');
            return redirect()->back();
        } catch (\Throwable $th) {
            Session::flash('error', $th->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        menuSubmenu('destination', 'allDestinations');
        $post = Destination::find($id);
        if ($post->feature_image) {
            Storage::delete('public/destination_images/' . $post->feature_image);
        }
        $post->delete();
        return redirect()->route('destinations.index')->with('success', 'Successfully Deleted');
    }



}