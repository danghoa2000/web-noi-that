@extends('components.layout')

@section('main-content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang Chu</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tin tuc</li>
        </ol>
    </nav>
</div>

<div class="container title-page" style="position: relative; margin-top: 10px">
    <div class="title" style="position: absolute; top: 10px; z-index: 1;">
        chia sẻ kiến thức
    </div>
</div>

<div id="service" class="service" style="margin-top: 20px; background: #012842">
    <div class="">
        <div class="">
            <div class="col-12">
                <?php
                $customerData = [];
            ?>

                @for ($i = 0; $i <= 5; $i++) <?php $customerResponse=(object) [ 'img'=> ($i % 2 == 0 ?
                    ('img/image_2.png') : ('img/image.png')),
                    "title" => $i % 2 . ' Thiết kế kiến trúc',
                    ];
                    $customerData[$i] = $customerResponse;
                    ?>
                    @endfor

                    @include('components.carousel', [
                    'id' => 'serviceCarousel',
                    'data' => $customerData,
                    'component' => \Blade::render('components.carousel_new', ['data' => $customerData, 'itemPerSlide' => 3])
                    ])

            </div>
            <div class="col-12" style="position: relative; margin: 40px 0">
                <div class="d-flex" style="justify-content: center">
                    <button class="btn btn-18 btn-cicle btn-outline btn-outline-yellow btn-slide-news-page"
                        style="margin: 0 10px;" data-bs-target="#serviceCarousel" data-bs-slide="prev"><i
                            class="fas fa-arrow-right"></i></button>
                    <button class="btn btn-18 btn-cicle btn-outline btn-outline-yellow btn-slide-news-page"
                        style="margin: 0 10px;"><i
                            class="fas fa-arrow-left" data-bs-target="#serviceCarousel"
                            data-bs-slide="next"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height: 3px; background: #D1AD53; margin-top: 35px"></div>
@endsection