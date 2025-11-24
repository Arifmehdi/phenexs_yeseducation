@props([
    'title' => '',
    'id' => '',
    'list' => [],
    'type' => 'static'  // static or dynamic
])

<div class="card mb-3">
    <div class="card-header" id="heading-{{ $id }}">
        <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse"
                    data-target="#collapse-{{ $id }}" aria-expanded="false" aria-controls="collapse-{{ $id }}">
                {{ $title }}
            </button>
        </h5>
    </div>

    <div id="collapse-{{ $id }}" class="collapse"
         aria-labelledby="heading-{{ $id }}" data-parent="#filters-accordion">
        <div class="card-body" style="max-height: 220px; overflow-y: auto; padding: 12px;">

            @if($type === 'dynamic')
                {{-- Dynamic List (Array of university API results) --}}
                @foreach(array_unique(array_column($list, 'name')) as $item)
                    <div class="form-check mb-1">
                        <input class="form-check-input filter-checkbox"
                               type="checkbox"
                               id="{{ $id }}-{{ Str::slug($item) }}"
                               name="{{ $id }}[]"
                               value="{{ $item }}">

                        <label class="form-check-label" for="{{ $id }}-{{ Str::slug($item) }}">
                            {{ $item }}
                        </label>
                    </div>
                @endforeach

            @else
                {{-- Static List --}}
                @foreach($list as $item)
                    <div class="form-check mb-1">
                        <input class="form-check-input filter-checkbox"
                               type="checkbox"
                               id="{{ $id }}-{{ Str::slug($item) }}"
                               name="{{ $id }}[]"
                               value="{{ $item }}">

                        <label class="form-check-label" for="{{ $id }}-{{ Str::slug($item) }}">
                            {{ $item }}
                        </label>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
</div>
