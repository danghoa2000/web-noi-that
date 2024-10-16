<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=alegreya-sc:400|allison:400|beau-rivage:400|abril-fatface:400|afacad:400"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="layout_1" style="">
        <div class="thumbnail" style="">
            @include('components.header')
            <img class="background" src="{{ asset('img/bg.jfif') }}" alt="Laravel background" />
            <div class="box-background"></div>
        </div>

        <div class="container" style="">
            <div class="d-flex position-relative" id="valutation">
                <div class="architecture" style="">
                    <span>Kiến trúc</span>
                </div>

                <div class="multi-value" style="">
                    <span>Đa giá trị</span>
                </div>

                <div class="col-6">
                    <div class="icon-arrow-down">
                        <div>
                            <img src="{{ asset('img/arrow-down.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-6 content">
                    <div style="">
                        <p style="">
                            Tiên phong sáng tạo những giải pháp kiến trúc đa giá trị nhằm kiến tạo nên những công trình
                            kiến
                            trúc <span style="color: #d1ad53">xứng tầm với chủ nhân</span>, thân thiện với môi trường &
                            bền vững
                            với thời gian
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="">
            <div class="d-flex position-relative">
                <span class="text-40">
                    Dự án <br> &ensp; tiêu biểu
                </span>
            </div>
        </div>
        <div id="featuredProjects" class="container-fluid mt-20">
            <div class="row">
                <div class="col-sm-4">
                    <div class="project">
                        <a href="" class="">
                            <img src="{{ asset('img/Rectangle 4107.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="project">
                        <a href="" class="">
                            <img src="{{ asset('img/Rectangle 4108.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="project">
                        <a href="" class="">
                            <img src="{{ asset('img/Rectangle 4106.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="" class="btn btn-18 btn-outline btn-outline-yellow">Tìm hiểu thêm</a>
            </div>
        </div>
        <div id="service" class="container-fluid service mt-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 position-relative">
                        <div class="box-service-special">
                            <div class="service-special">
                                <span class="text-40">
                                    dịch vụ
                                </span>
                                <span class="text-40">
                                    nổi bật
                                </span>
                            </div>
                            <div class="btn-slick-slider">
                                <button class="btn btn-18 btn-cicle btn-outline btn-outline-default mx-2"
                                    style="margin-bottom: 15px" data-bs-target="#serviceCarousel" data-bs-slide="prev"><i
                                        class="fas fa-arrow-right"></i></button>
                                <button class="btn btn-18 btn-cicle btn-outline btn-outline-default mx-2"><i
                                        class="fas fa-arrow-left" data-bs-target="#serviceCarousel"
                                        data-bs-slide="next"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
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
                            'class' => 'slick-slider',
                            'component' => \Blade::render('components.service_carousel', ['data' => $customerData, 'itemPerSlide' => 2])
                            ])

                    </div>
                </div>
            </div>
        </div>

        <div id="design" class="design position-relative">
            <div class="">
                <div class="background"
                    style="background-image: url({{ asset('img/design.jfif') }});">
                </div>
                <div class="box-background"></div>
            </div>
            <div class="container content">
                <div class="content-text">
                    <span class="text-40">
                        Triết lý <br> &ensp; thiết kế
                    </span>
                </div>
                <div>
                    <div class="ellipse"></div>
                    <div class="ellipse"></div>
                    <div class="ellipse"></div>
                </div>

                <div>
                    <div class="cicle">
                        <img src="{{ asset('img/1.png') }}" alt="" style="object-fit: none">
                    </div>
                    <div class="cicle">
                        <img src="{{ asset('img/img_1.png') }}" alt="">
                    </div>
                    <div class="cicle">
                        <img src="{{ asset('img/img_2.png') }}" alt="">
                    </div>
                </div>
                
            </div>
        </div>

        <div class="container-fluid background-light box-declaration"
            style="">
            <div style="position: absolute; bottom: 30px; left: 0; width: 25%;">
                <img src="{{ asset('img/Isolation_Mode.png') }}" alt="">
            </div>
            <div style="position: absolute; right: 0; top: 30px; width: 25%;">
                <img src="{{ asset('img/Isolation_Mode.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-4 declaration" style="">
                        <span class="text-45 color-blue text-uppercase">
                            Tuyên ngôn
                        </span>
                        <span class="text-65 color-yellow font-beau">
                            của Founder
                        </span>
                    </div>

                    <div class="col-sm-4 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/Rectangle 4108.png') }}" alt="">
                    </div>

                    <div class="col-sm-4 d-flex justify-content-center" style="flex-direction: column">
                        <p style="">
                            “Lựa chọn phong cách cổ điển có thể phản ánh sự trân trọng đối với sự thanh lịch vượt thời
                            gian, tính đối xứng và vẻ đẹp trường tồn lấy cảm hứng từ các nền văn minh lịch sử.”
                        </p>
                        <div class="d-flex justify-content-center mt-4">
                            <a href="" class="btn btn-18 btn-outline btn-outline-yellow color-blue">Tìm hiểu
                                thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="padding-top:150px; padding-bottom: 65px; position: relative;">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center" style="flex-direction: column">
                    <span class="text-80 color-yellow font-beau">Cảm nhận</span>
                    <span class="text-40 text-white">
                        Khách Hàng
                    </span>
                </div>
                <div class="row">
                    <?php
                        $customerData = [];
                    ?>

                    @for ($i = 0; $i < 5; $i++) <?php $customerResponse=(object) [ 'img'=> asset('img/landpage.png'),
                        "content" => $i . ' Archi World có đội ngũ quản lý và nhân viên trẻ trung, chuyên nghiệp. Từ sếp
                        tới nhân viên đều nhiệt tình, dễ thương. Sức trẻ của các bạn thể hiện trong từng ý tưởng và tinh
                        thần nhiệt huyết với công việc.',
                        'info' => $i. ' Anh Lê Anh Tuấn _ Mỹ Đình 1, Hà Nội'
                        ];

                        $customerData[$i] = $customerResponse;
                        ?>
                        @endfor

                        @include('components.carousel', [
                        'id' => 'customerData',
                        'data' => $customerData,
                        'class' => 'carousel-inner',
                        'component' => \Blade::render('components.customer_response', ['data' => $customerData])
                        ])
                </div>
            </div>
        </div>

        <div class="container-fluid background-light partner">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center" style="flex-direction: column">
                    <span class="font-beau text-80 color-yellow">Đối tác</span>
                    <span class="text-40 color-blue">
                        Chiến Lược
                    </span>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <hr style="background: #D1AD53; height: 150px; width:2px">
                </div>
                <div class="d-flex justify-content-center align-items-center flex-wrap">
                    @for ($i = 1; $i <= 6; $i++) <div style="display: block; width: 135px; height: 135px; margin: 10px">
                        <img src="{{ asset('img/img_1.png') }}" alt="">
                </div>
                @endfor
            </div>
        </div>
    </div>

    @include('components.footer')
    </div>
    <script>
        $('.slick-slider').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            nextArrow: $('#service [data-bs-slide="next"]')[0],
            prevArrow: $('#service [data-bs-slide="prev"]')[0],
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    </script>
</body>

</html>