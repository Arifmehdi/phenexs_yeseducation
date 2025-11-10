<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\BlogPost;

class RecentPosts extends Component
{
    public $recentPosts;

    public function __construct($limit = 3)
    {
        // Fetch latest published posts
        $this->recentPosts = BlogPost::where('status', 'published')
            ->select('title','slug','feature_image','created_at')
            ->latest()
            ->take($limit)
            ->get();
    }

    public function render()
    {
        return view('components.recent-posts');
    }
}
