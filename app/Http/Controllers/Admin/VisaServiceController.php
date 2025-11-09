<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Service;
use App\Models\Media;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class VisaServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        menuSubmenu('service', 'allServices');
        $data['newses'] = Service::latest()->paginate(20);
        return view('admin.services.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newsActive(Request $request)
    {
        if ($request->mode == 'true') {
            DB::table('services')->where('id', $request->id)->update(['active' => 1, 'status' => 'published']);
        } else {
            DB::table('services')->where('id', $request->id)->update(['active' => 0, 'status' => 'pending']);
        }
        return response()->json(['msg' => 'Successfully updated status', 'status' => true]);
    }

    public function create()
    {
        menuSubmenu('service', 'storeServices');
        $data['writers'] = User::where('writer', 1)->get();
        $data['medias'] = Media::latest()->paginate(20);
        return view('admin.services.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        menuSubmenu('service', 'storeServices');

        $this->validate($request, [
            'title' => 'required|string',
            'slug' => 'required|string| unique:blog_posts,slug',
            'excerpt' => 'nullable|string',
            'description' => 'nullable|string',
            'feature_image' => 'nullable|image|mimes:jpeg,webp,jpg,png',
            'icon_image' => 'nullable|image|mimes:jpeg,webp,jpg,png',
        ]);

        if ($request->hasFile('feature_image')) {
            $image = $request->file('feature_image');
            $image_ex =  $image->getClientOriginalExtension();
            $file_path = date('ymdhis') . '.' . $image_ex;
            Image::make($image)->resize(1200, 500);
            $image->storeAs('services_images', $file_path, 'public');
        } else {
            $file_path =  null;
        }
        if ($request->hasFile('icon_image')) {
            $image = $request->file('icon_image');
            $image_ex =  $image->getClientOriginalExtension();
            $file_path_2 = date('ymdhis') . '.' . $image_ex;
            Image::make($image)->resize(1200, 500);
            $image->storeAs('services_images', $file_path, 'public');
        } else {
            $file_path_2 =  null;
        }


        $blogPost = new Service();
        $blogPost->title = $request->title;
        $blogPost->slug = $request->slug;
        // $blogPost->category_id = $request->category_id;
        $blogPost->excerpt = $request->excerpt;
        $blogPost->description = $request->description;
        $blogPost->tags = $request->tags;
        $blogPost->active = $request->active ?? 0;
        $blogPost->editor = $request->editor ?? 0;
        $blogPost->featured_slider = $request->featured_slider ?? 0;
        $blogPost->addedby_id = Auth::id();
        $blogPost->feature_image = $file_path;
        $blogPost->icon_image = $file_path_2;
        $blogPost->save();


        Session::flash('success', 'Service Create Successfully');
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        menuSubmenu('service', 'allServices');
        return view('admin.services.view', ['news' => Service::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        menuSubmenu('service', 'allServices');

        $data['news'] = Service::find($id);
        $data['writers']    = User::where('writer', 1)->get();
        $data['medias'] = Media::latest()->paginate(20);
        $data['ots'] = $data['news']->tags ? explode(", ", $data['news']->tags) : null;
        $data['authors'] = $data['news']->authors ? explode(", ", $data['news']->authors) : null;
        return view('admin.services.edit', $data);
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

        menuSubmenu('service', 'storeServices');

        $this->validate($request, [
            'title' => 'required|string',
            'slug' => 'required|string|unique:blog_posts,slug,' . $id,
            'excerpt' => 'nullable|string',
            'description' => 'nullable|string',
            'status' => 'required',
            'feature_image' => 'nullable|image|sometimes|mimes:jpeg,webp,jpg,png',
            'icon_image' => 'nullable|image|sometimes|mimes:jpeg,webp,jpg,png',

        ]);

        $blogPost = Service::find($id);

        try {
            if ($request->hasFile('feature_image')) {
                if ($blogPost->feature_image) {
                    Storage::delete('public/services_images/' . $blogPost->feature_image);
                }
                $image = $request->file('feature_image');
                $image_ex =  $image->getClientOriginalExtension();
                $file_path = date('ymdhis') . '.' . $image_ex;
                $image->storeAs('services_images', $file_path, 'public');
            } else {
                $file_path =  $blogPost->feature_image;
            }
            if ($request->hasFile('icon_image')) {
                if ($blogPost->icon_image) {
                    Storage::delete('public/services_images/' . $blogPost->icon_image);
                }
                $image = $request->file('icon_image');
                $image_ex =  $image->getClientOriginalExtension();
                $file_path_2 = date('ymdhis') . '.' . $image_ex;
                $image->storeAs('services_images', $file_path, 'public');
            } else {
                $file_path_2 =  $blogPost->icon_image;
            }

            $blogPost->title = $request->title;
            $blogPost->slug = $request->slug;
            $blogPost->excerpt = $request->excerpt;
            $blogPost->description = $request->description;
            $blogPost->tags = $request->tags;
            $blogPost->active = $request->active ?? 0;
            $blogPost->editor = $request->editor ?? 0;
            $blogPost->featured_slider = $request->featured_slider ?? 0;
            $blogPost->status = $request->status ?? 'pending';
            $blogPost->editedby_id = Auth::id();
            $blogPost->feature_image = $file_path;
            $blogPost->icon_image = $file_path_2;
            $blogPost->save();
        
            Session::flash('success', 'Service update Successfully');
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

        menuSubmenu('service', 'allServices');
        $post = Service::find($id);
        if ($post->feature_image) {
            Storage::delete('public/services_images/' . $post->feature_image);
        }
        if ($post->icon_image) {
            Storage::delete('public/services_images/' . $post->icon_image);
        }
        $post->delete();
        return redirect()->route('service.index')->with('success', 'Successfully Deleted');
    }



}
