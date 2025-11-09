<div class="sidebar-widget sidebar-categories-2">
    <div class="widget-title">
        <h3>Categories</h3>
        <div class="dotted-box">
            <span class="dotted"></span>
            <span class="dotted"></span>
            <span class="dotted"></span>
        </div>
    </div>
    <div class="widget-content">
        <ul class="categories-list clearfix">
            @forelse($categories as $category)
            <li>
                <a href="#">
                    {{ $category->name }}
                </a>
            </li>
            @empty
            <li>No categories found.</li>
            @endforelse
        </ul>
    </div>
</div>