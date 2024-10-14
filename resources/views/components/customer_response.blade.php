@foreach ($data as $index => $item)
<div class="carousel-item {{ $index == 0 ? 'active' : '' }}" style=""> 
    <div  style="display: flex; align-items: center; text-align: center; flex-direction:column;">
        <img src="{{ $item->img }}"
            style="border-radius:80% / 100% 100% 100% 100%; width:218px; height: 311px; object-fit: cover; margin: 30px 0;"
            alt="">
        <p style="">
            {{ $item->content }}
        </p>
        <p>{{ $item->info }}</p>
    </div>
</div>
@endforeach
