<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Course;


class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $courses;
    public function __construct($limit = null)
    {
        $this->courses = Course::where('status', 'published')
            ->orderBy('title')
            ->select('title','slug','id')
            ->latest()
            ->when($limit, fn($q) => $q->take($limit))
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar');
    }
}
