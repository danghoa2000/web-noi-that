<div class="carousel-inner">
    @for ($i = 0; $i < count($data); $i += $itemPerSlide) 
        <?php
            $result = array_slice($data, $i, $itemPerSlide);
        ?>
        <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
            <div class="row">
                @foreach ($result as $item)
                <div class="col-{{ 12 / $itemPerSlide }}">
                    <div class="service-item">
                        <img src="{{ $item->img }}" alt="">
                        <div class="content">
                            <p class="title">{{ $item->title }}</p>
                            <a href="" class="btn btn-18 btn-outline btn-outline-default">Tìm
                                hiểu
                                thêm</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    
    @endfor
</div>
