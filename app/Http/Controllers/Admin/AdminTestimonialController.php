<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdminTestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        menuSubmenu('testimonials', 'testimonialsAll');
        $testimonials = Testimonial::latest()->paginate();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        menuSubmenu('testimonials', 'createTestimonial');
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        menuSubmenu('testimonials', 'testimonialsAll');
        $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'text_en' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('testimonials', 'public');
        // }

        if ($request->hasFile('image')) {
            $file = $request->image;
            $ext = "." . $file->getClientOriginalExtension();
            $imageName = rand(111,555).time() . $ext;
            Storage::disk('public')->put('testimonial/' . $imageName, File::get($file));
            $imagePath = $imageName;
        }


         $isActive = $request->active ? 1 : 0;

        Testimonial::create([
            'name' => $request->name,
            'company' => $request->company,
            'address' => $request->address,
            'text_en' => $request->text_en,
            'text_bn' => $request->text_bn,
            'rating' => $request->rating,
            'image' => $imagePath,
            'active' => $isActive,
        ]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        menuSubmenu('testimonials', 'createTestimonial');
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        menuSubmenu('testimonials', 'testimonialsAll');
        $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'text_en' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        // if ($request->hasFile('image')) {
        //     // Delete old image if exists
        //     if ($testimonial->image) {
        //         \Storage::disk('public')->delete($testimonial->image);
        //     }
        //     $imagePath = $request->file('image')->store('testimonials', 'public');
        // }

        if ($request->hasFile('image')) {
            $old_file = 'testimonial/' . $testimonial->image;

            if (Storage::disk('public')->exists($old_file)) {
                Storage::disk('public')->delete($old_file);
            }
            $file = $request->image;
            $ext = "." . $file->getClientOriginalExtension();
            $imageName = 'testimonial_'.time() . $ext;
            Storage::disk('public')->put('testimonial/' . $imageName, File::get($file));
            $imagePath = $imageName;
        }
        
        $isActive = $request->active ? 1 : 0;

        $testimonial->update([
            'name' => $request->name,
            'company' => $request->company,
            'address' => $request->address,
            'text_en' => $request->text_en,
            'text_bn' => $request->text_bn,
            'rating' => $request->rating,
            'image' => $imagePath,
            'active' => $isActive,
        ]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        menuSubmenu('testimonials', 'testimonialsAll');
        if ($testimonial->image) {
            \Storage::disk('public')->delete($testimonial->image);
        }
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
