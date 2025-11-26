<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Consultation; // Import the Consultation model
use Illuminate\Http\Request;
use Alert; // Assuming 'Alert' is used for notifications

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultations = Consultation::latest()->paginate(20);
        return view('admin.consultations.index', compact('consultations'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function show(Consultation $consultation)
    {
        return view('admin.consultations.show', compact('consultation'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultation $consultation)
    {
        $consultation->delete();

        Alert::success('Success', 'Consultation message deleted successfully!');
        return back();
    }
}