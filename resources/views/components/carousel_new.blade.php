@foreach ($data as $item)
<div class="service-item" style="position: relative">
    <div class=""
        style="position: absolute; top:0; left: 0; background-color: #012842; opacity: 0.43; width: 100%; height: 100%;">
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