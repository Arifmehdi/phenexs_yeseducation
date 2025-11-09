<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\BlogCategory;

class BlogCategories extends Component
{
    public $categories;

    /**
     * Create a new component instance.
     */
    public function __construct($limit = null)
    {
        // Fetch categories, optionally limit
        $query = BlogCategory::orderBy('name');

        if ($limit) {
            $query->take($limit);
        }

        $this->categories = $query->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.blog-categories');
    }
}

