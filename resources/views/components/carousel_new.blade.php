@foreach ($data as $item)
<div class="service-item" style="position: relative">
    <div class="box-background"
        style="opacity: 0.43;">
    </div>
    <img src="{{ $item->img }}" alt="">
    <div class="content">
        <p class="title">{{ $item->title }}</p>
        <a href="" class="btn btn-18 btn-outline btn-outline-yellow">Tìm
            hiểu
            thêm</a>
    </div>
</div>
@endforeach 