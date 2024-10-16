<div id="{{ $id }}" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach ($data as $index => $item)
            <button type="button"
                data-bs-target="#{{ $id }}" data-bs-slide-to="{{ $index }}"
                class="{{ $index == 0 ? 'active' : ''}}" aria-current="true" aria-label="Slide {{ $index + 1 }}">
            </button>
        @endforeach

    </div>
    <div class="{{ $class }}">
        {!! $component !!}
    </div>
</div>