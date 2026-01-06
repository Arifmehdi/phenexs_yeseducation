<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Intake;
use Illuminate\Http\Request;

class IntakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        menuSubmenu('intakes', 'allIntakes');
        return view('admin.intakes.index', [
            'intakes' => Intake::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        menuSubmenu('intakes', 'createIntake');
        return view('admin.intakes.create');
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
            'name' => 'required|string|max:255|unique:intakes',
        ]);

        Intake::create($request->all());

        return redirect()->route('intakes.index')->with('success', 'Intake created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // For simple models like Intake, show is often not needed if index/edit provide enough info.
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
        menuSubmenu('intakes', 'editIntake');
        return view('admin.intakes.edit', [
            'intake' => Intake::findOrFail($id)
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
            'name' => 'required|string|max:255|unique:intakes,name,' . $id,
        ]);

        $intake = Intake::findOrFail($id);
        $intake->update($request->all());

        return redirect()->route('intakes.index')->with('success', 'Intake updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $intake = Intake::findOrFail($id);
        $intake->delete();

        return redirect()->route('intakes.index')->with('success', 'Intake deleted successfully.');
    }
}
