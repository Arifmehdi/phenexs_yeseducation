<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\DestinationCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DestinationCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        menuSubmenu('destination','allDestinationCat');
        $data['categories'] = DestinationCategory::paginate(20);
        return view('admin.destination_categories.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        menuSubmenu('destination','createDestinationCat');
        return view('admin.destination_categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function categoryActive(Request $request){
        if($request->mode=='true'){
            DB::table('destination_categories')->where('id',$request->id)->update(['active'=>1]);
        }
        else{
            DB::table('destination_categories')->where('id',$request->id)->update(['active'=>0]);
        }
        return response()->json(['msg'=>'Successfully updated status','status'=>true]);
    }

    public function store(Request $request)
    {
        menuSubmenu('destination','createDestinationCat');

        $this->validate($request,[
            'name'=>'required',
        ]);

       
        $category = new DestinationCategory();
        $category->name       = $request->name;
        $category->addedby_id = Auth::id();
        $category->save();
        return redirect()->route('destination.create')->with('success','Successfully Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        menuSubmenu('destination','allDestinationCat');

        return view('admin.destination_categories.view',['category'=>DestinationCategory::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        menuSubmenu('destination','allDestinationCat');

        return view('admin.destination_categories.edit',['category'=>DestinationCategory::find($id)]);

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
        menuSubmenu('destination','allDestinationCat');

        $this->validate($request,[
            'name'=>'required',
        ]);

        $category =  DestinationCategory::find($id);
        $category->name        = $request->name;
        $category->active      = $request->active ?? 0;
        $category->editedby_id = Auth::id();
        $category->save();
    
        return redirect()->back()->with('success','Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        menuSubmenu('destination','allDestinationCat');

        $category =  DestinationCategory::find($id);
        $category->delete();
        return redirect()->route('destination.index')->with('success','Successfully Deleted');

    }
}
