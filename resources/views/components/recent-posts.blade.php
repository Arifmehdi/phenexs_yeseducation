<div>
</div><div class="sidebar-widget sidebar-post">
    <div class="widget-title">
        <h3>Recent Posts</h3>
        <div class="dotted-box">
            <span class="dotted"></span>
            <span class="dotted"></span>
            <span class="dotted"></span>
        </div>
    </div>
    <div class="post-inner">
        @forelse($recentPosts as $recent)
        <div class="post">
            <figure class="post-thumb">
                <a href="{{ route('blogDetails', $recent->slug) }}">
                    @if($recent->feature_image && file_exists(public_path('storage/post_images/' . $recent->feature_image)))
                        <img src="{{ asset('storage/post_images/' . $recent->feature_image) }}" alt="{{ $recent->title }}">
                    @else
                        <img src="{{ asset('frontend/assets/images/news/default.jpg') }}" alt="Default Image">
                    @endif
                </a>
            </figure>
            <h5>
                <a href="{{ route('blogDetails', $recent->slug) }}">
                    {{ Str::limit($recent->title, 50) }}
                </a>
            </h5>
            <span class="post-date">{{ $recent->created_at->format('F d, Y') }}</span>
        </div>
        @empty
        <p>No recent posts found.</p>
        @endforelse
    </div>
</div>
