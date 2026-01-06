<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IntakeCourse;
use Illuminate\Http\Request;

class IntakeCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        menuSubmenu('intakes', 'allIntakeCourses');
        return view('admin.intake-courses.index', [
            'intakeCourses' => IntakeCourse::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        menuSubmenu('intakes', 'createIntakeCourse');
        return view('admin.intake-courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:intake_courses',
        ]);

        IntakeCourse::create($request->all());

        return redirect()->route('intake-courses.index')->with('success', 'Intake Course created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // For simple models like IntakeCourse, show is often not needed if index/edit provide enough info.
        // If needed, you would return a view similar to edit but with disabled fields.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        menuSubmenu('intakes', 'editIntakeCourse');
        return view('admin.intake-courses.edit', [
            'intakeCourse' => IntakeCourse::findOrFail($id)
        ]);
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
        $request->validate([
            'name' => 'required|string|max:255|unique:intake_courses,name,' . $id,
        ]);

        $intakeCourse = IntakeCourse::findOrFail($id);
        $intakeCourse->update($request->all());

        return redirect()->route('intake-courses.index')->with('success', 'Intake Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $intakeCourse = IntakeCourse::findOrFail($id);
        $intakeCourse->delete();

        return redirect()->route('intake-courses.index')->with('success', 'Intake Course deleted successfully.');
    }
}
