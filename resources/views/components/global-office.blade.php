<li class="accordion block {{ $active ?? false ? 'active-block' : '' }}">
    <div class="acc-btn {{ $active ?? false ? 'active' : '' }}"
        style="display: flex; justify-content: space-between; align-items: center;">

        <div style="display: flex; align-items: center;">
            <div>
                <h5 class="mb-1 text-xl font-semibold tracking-tight text-[#242E69]">
                    {{ $title }}
                </h5>
                <p class="text-gray-700">{{ $country }}</p>
            </div>
        </div>

        <div class="icon-outer">
            <i class="fas fa-angle-down"></i>
        </div>
    </div>

    <div class="acc-content {{ $active ?? false ? 'current' : '' }}">
        <div class="row">
            <!-- Contact Column -->
            <div class="col-md-4 mb-3">
                <h6>Contact Details</h6>
                @if($email)
                <p><i class="fas fa-envelope me-2"></i>{{ $email }}</p>
                @endif
                @if($phone)
                <p><i class="fas fa-phone me-2"></i>{{ $phone }}</p>
                @endif
                @if($link)
                <a href="{{ $link }}" class="btn btn-primary btn-sm mt-2">View Details</a>
                @endif
            </div>

            <!-- Opening Hours Column -->
            <div class="col-md-4 mb-3">
                <h6>Opening Hours</h6>
                <ul class="list-unstyled mb-0">
                    @foreach($hours as $day => $time)
                    <li class="{{ $loop->even ? 'bg-light' : '' }} py-1">
                        <strong class="{{ $time === 'Closed' ? 'text-danger' : 'text-success' }}">{{ $day }}:</strong>
                        {{ $time }}
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Map Column -->
            <div class="col-md-4 mb-3">
                <h6>Find Us</h6>
                <div class="ratio ratio-16x9">
                    <iframe src="{{ $map }}" style="border:0;" allowfullscreen loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</li>