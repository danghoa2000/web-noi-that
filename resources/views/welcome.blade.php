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

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="" style="background-color: #012842; color: #fff">
        <div class="" style="height: 450px; overflow: hidden; position: relative">
            @include('components.header')
            <img id="background" style="position: absolute; top: 0; left: 0;" src="{{ asset('img/bg.jfif') }}" alt="Laravel background" />
            <div class=""
                style="position: absolute; top:0; left: 0; background-color: #012842; opacity: 0.6; width: 100%; height: 100%;">
            </div>
        </div>

        <div class="container" style="">
            <div class="d-flex" style="position: relative;" id="valutation">
                <div style="position: absolute; left: 0; top: -180px; width: 200px; max-width: 100%;">
                    <span
                        style="font-size: 120px; line-height: 120px; font-family: 'Abril Fatface', display; color: #fff; position; text-transform: uppercase">
                        Kiến trúc
                    </span>
                </div>

                <div class="" style="position: absolute; left: 0; top: -40px; width: 100%; text-align: center">
                    <span
                        style="font-style: italic; display: inline-block; transform: translateX(60px); font-size: 120px; line-height: 120px; font-family: 'Beau Rivage', handwriting; color: #D1AD53">Đa
                        giá trị</span>
                </div>

                <div class="col-6">
                    <div
                        style="width: 150px; height: 150px; border:1px solid #D1AD53; color: #D1AD53; border-radius: 50%; margin-left: 100px; display: flex; align-items: center; justify-content: center">
                        <div style="width: 45px; ">
                            <img src="{{ asset('img/arrow-down.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-6" style="margin-top: 150px;">
                    <div style="width: 675px; max-width: 100%;">
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
            <div class="d-flex" style="position: relative;" id="valutation">
                <span style="font-size: 40px; line-height: 45px">
                    Dự án <br> &ensp; tiêu biểu
                </span>
            </div>
        </div>
        <div id="featuredProjects" class="container-fluid" style="margin-top: 20px">
            <div class="row">
                <div class="col-4">
                    <div class="project">
                        <a href="" class="">
                            <img src="{{ asset('img/Rectangle 4107.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="project">
                        <a href="" class="">
                            <img src="{{ asset('img/Rectangle 4108.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-4">
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
        <div id="service" class="container-fluid service" style="margin-top: 20px">
            <div class="container">
                <div class="row">
                    <div class="col-4" style="position: relative">
                        <div class="service-special" style="">
                            <span style="font-size: 40px; line-height: 45px">
                                dịch vụ
                            </span>
                            <span style="font-size: 40px; line-height: 45px">
                                nổi bật
                            </span>
                        </div>
                        <div class="d-flex" style="flex-direction: column; position: absolute; bottom: 10px; right: 0;">
                            <button class="btn btn-18 btn-cicle btn-outline btn-outline-default"
                                style="margin-bottom: 15px" data-bs-target="#serviceCarousel" data-bs-slide="prev"><i
                                    class="fas fa-arrow-right"></i></button>
                            <button class="btn btn-18 btn-cicle btn-outline btn-outline-default"><i
                                    class="fas fa-arrow-left" data-bs-target="#serviceCarousel"
                                    data-bs-slide="next"></i></button>
                        </div>
                    </div>

                    <div class="col-8">
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
                            'component' => \Blade::render('components.service_carousel', ['data' => $customerData, 'itemPerSlide' => 2])
                            ])

                    </div>
                </div>
            </div>
        </div>

        <div id="design" class="design" style="position: relative">
            <div class="">
                <div class="background"
                    style="background-image: url({{ asset('img/design.jfif') }}); position: absolute; top:0; left:0; width: 100%">
                </div>
                <div class=""
                    style="position: absolute; top:0; left: 0; background-color: #012842; opacity: 0.6; width: 100%; height: 100%;">
                </div>
            </div>
            <div class="container" style="height: 450px; position: relative;">
                <div class="" style="position: absolute; top:70px; left: 0; width: 100%; height: 100%;">
                    <span style="font-size: 40px; line-height: 45px">
                        Triết lý <br> &ensp; thiết kế
                    </span>
                </div>
                <span class="ellipse" style="width: 20%; height: 20%;"></span>
                <span class="cicle"
                    style="width: 150px; height: 150px; left: 13%; bottom: -80px; background-color: #fff">
                    <img src="{{ asset('img/1.png') }}" alt="" style="object-fit: none">
                </span>
                <span class="ellipse" style="width: 60%; height: 70%;"></span>
                <span class="cicle" style="width: 100px; height: 100px; left: 57%; bottom: -50px;">
                    <img src="{{ asset('img/img_1.png') }}" alt="">
                </span>
                <span class="ellipse" style="width: 75%; height: 80%;"></span>
                <span class="cicle" style="width: 100px; height: 100px; left: 72%; bottom: -50px;">
                    <img src="{{ asset('img/img_2.png') }}" alt="">
                </span>
            </div>
        </div>

        <div class="container-fluid background-light "
            style="padding-top:150px; padding-bottom: 65px; position: relative;">
            <div style="position: absolute; bottom: 30px; left: 0; width: 25%;">
                <img src="{{ asset('img/Isolation_Mode.png') }}" alt="">
            </div>
            <div style="position: absolute; right: 0; top: 30px; width: 25%;">
                <img src="{{ asset('img/Isolation_Mode.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-4 declaration" style="">
                        <span style="font-size: 45px; line-height: 50px; color: #012842; text-transform: uppercase">
                            Tuyên ngôn
                        </span>
                        <span style="
                                font-size: 65px; 
                                line-height: 65px; 
                                color: #D1AD53; 
                                font-family: 'Beau Rivage', handwriting;">
                            của Founder
                        </span>
                    </div>

                    <div class="col-4">
                        <img src="{{ asset('img/Rectangle 4108.png') }}" alt="">
                    </div>

                    <div class="col-4 d-flex justify-content-center" style="flex-direction: column">
                        <p style="">
                            “Lựa chọn phong cách cổ điển có thể phản ánh sự trân trọng đối với sự thanh lịch vượt thời
                            gian, tính đối xứng và vẻ đẹp trường tồn lấy cảm hứng từ các nền văn minh lịch sử.”
                        </p>
                        <div class="d-flex justify-content-center mt-4">
                            <a href="" class="btn btn-18 btn-outline btn-outline-yellow" style="color: #012842">Tìm hiểu
                                thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="padding-top:150px; padding-bottom: 65px; position: relative;">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center" style="flex-direction: column">
                    <span
                        style="font-size: 80px; line-height: 80px; color: #D1AD53; font-family: 'Beau Rivage', handwriting;">Cảm
                        nhận</span>
                    <span style="font-size: 40px; line-height: 40px; color: #fff; text-transform: uppercase">
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
                        'component' => \Blade::render('components.customer_response', ['data' => $customerData])
                        ])
                </div>
            </div>
        </div>

        <div class="container-fluid background-light"
            style="padding-top:150px; padding-bottom: 65px; position: relative;">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center" style="flex-direction: column">
                    <span
                        style="font-size: 80px; line-height: 80px; color: #D1AD53; font-family: 'Beau Rivage', handwriting;">Đối
                        tác</span>
                    <span style="font-size: 40px; line-height: 40px; color: #012842; text-transform: none">
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
</body>

</html>