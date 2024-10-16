@extends('components.layout')

@section('css')
    @vite(['resources/sass/_news_page.scss'])
@endsection

@section('main-content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang Chu</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tin tuc</li>
        </ol>
    </nav>
</div>

<div class="news-page">
    <div class="container title-page" style="">
        <div class="title" style="">
            chia sẻ kiến thức
        </div>
    </div>
    <div id="" class="service" style="">
        {{-- <div class="row"> --}}
            <div>
                <?php
                $customerData = [];
                ?>
    
                @for ($i = 0; $i <= 5; $i++) 
                    <?php 
                    $customerResponse=(object) [ 
                        'img'=> ($i % 2 == 0 ? ('img/image_2.png') : ('img/image.png')),
                        'title' => $i % 2 . ' Thiết kế kiến trúc',
                    ];
                    $customerData[$i] = $customerResponse;
                    ?>
                    @endfor
    
                    @include('components.carousel', [
                        'id' => 'serviceCarousel',
                        'data' => $customerData,
                        'class' => 'slick-slider',
                        'component' => \Blade::render('components.carousel_new', [
                            'data' => $customerData,
                            'itemPerSlide' => 3 
                        ])
                    ])
    
            </div>
            <div class="col-12 mt-40 relative">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-18 btn-cicle btn-outline btn-outline-yellow btn-slide-news-page"
                        style="margin: 0 10px;" data-bs-target="#serviceCarousel" data-bs-slide="prev"><i
                            class="fas fa-arrow-right"></i></button>
                    <button class="btn btn-18 btn-cicle btn-outline btn-outline-yellow btn-slide-news-page"
                        style="margin: 0 10px;"><i class="fas fa-arrow-left" data-bs-target="#serviceCarousel"
                            data-bs-slide="next"></i></button>
                </div>
            </div>
        {{-- </div> --}}
    </div>
</div>

<div class="end-line"></div>
<script>
    $('.slick-slider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        nextArrow: $('[data-bs-slide="next"]')[0],
        prevArrow: $('[data-bs-slide="prev"]')[0],
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
</script>
@endsection