@extends('components.layout')

@section('css')
    @vite(['resources/sass/_introduce.scss'])
@endsection

@section('main-content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang Chu</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gioi thieu</li>
        </ol>
    </nav>
</div>

@include('components.page_thumbnail', ['title' => 'Gioi thieu'])

<div class="container" style="margin-top: 60px">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/image.png') }}" alt="" style="max-height: 400px;">
        </div>
        <div class="col-md-6">
            <span class="text-40 color-yellow mb-4 d-block">
                Câu chuyện thương hiệu
            </span>
            <div class="d-flex">
                <p  class="mr-2" style="flex: 1;">Lời đầu tiên, Archi World xin được trân trọng gửi đến quý vị lời
                    chúc sức khỏe, hạnhphúc và thành công. CÔNG TY CỔ PHẦN THIẾT KẾ Archi World được thành lập với một
                    lòng yêu nghề và tâm huyết của những kỹ sư trẻ và đội ngũ nhân viên lành nghề, kiến trúc không ngừng
                    thay đổi, phát triển và nhanh chóng khẳng định được thương hiệu công ty thiết kế nội thất uy tín và
                    phong cách của riêng mình. Archi World chuyên thiết kế và thi công nội thất theo mỗi phong cách
                    riêng biệt từ tân cổ điển tới hiện đại, từ không gian hẹp đến không gian sống rộng rãi.</p>
                <p class="ml-2" style="flex: 1;">Lời đầu tiên, Archi World xin được trân trọng gửi đến quý vị lời
                    chúc sức khỏe, hạnhphúc và thành công. CÔNG TY CỔ PHẦN THIẾT KẾ Archi World được thành lập với một
                    lòng yêu nghề và tâm huyết của những kỹ sư trẻ và đội ngũ nhân viên lành nghề, kiến trúc không ngừng
                    thay đổi, phát triển và nhanh chóng khẳng định được thương hiệu công ty thiết kế nội thất uy tín và
                    phong cách của riêng mình.</p>
            </div>
        </div>
    </div>
    <div class="row flex-row-reverse mt-40">
        <div class="col-md-6">
            <img src="{{ asset('img/image.png') }}" alt="" style="max-height: 400px;">
        </div>
        <div class="col-md-6">
            <span class="text-40 color-yellow mb-4 d-block">
                Tầm nhìn - Sứ mệnh
            </span>
            <div class="introduce-item">
                <div>
                    <img src="{{ asset('img/eye.png') }}" alt="">
                    <span>Tầm nhìn</span>
                </div>
                <p>Tầm nhìn của chúng tôi trong 5 năm tới là mở rộng ảnh hưởng ra toàn bộ khu vực miền Bắc và trong 10
                    năm tới sẽ phủ sóng khắp cả nước.</p>
            </div>
            <div class="introduce-item">
                <div>
                    <img src="{{ asset('img/Isolation_Mode_2.png') }}" alt="">
                    <span>Sứ mệnh</span>
                </div>
                <p>Tầm nhìn của chúng tôi trong 5 năm tới là mở rộng ảnh hưởng ra toàn bộ khu vực miền Bắc và trong 10
                    năm tới sẽ phủ sóng khắp cả nước.</p>
            </div>
        </div>
    </div>
    <div class="row mt-45">
        <span class="text-40 color-yellow mb-4 d-block text-center">
            Lời hứa thương hiệu
        </span>
        <p style="text-align: center">
            Lời đầu tiên, Archi World xin được trân trọng gửi đến quý vị lời chúc sức khỏe, hạnhphúc và thành công. CÔNG
            TY CỔ PHẦN THIẾT KẾ Archi World được thành lập với một lòng yêu nghề và tâm huyết của những kỹ sư trẻ và đội
            ngũ nhân viên lành nghề, kiến trúc không ngừng thay đổi, phát triển và nhanh chóng khẳng định được thương
            hiệu công ty thiết kế nội thất uy tín và phong cách của riêng mình. Archi World chuyên thiết kế và thi công
            nội thất theo mỗi phong cách riêng biệt từ tân cổ điển tới hiện đại, từ không gian hẹp đến không gian sống
            rộng rãi.
        </p>
        <div class="my-5">
            <img src="{{ asset('img/bg.jfif') }}" alt="">
        </div>
    </div>
</div>
<div class="" style="padding: 60px 0; background:#D1AD53">
    <span class="d-block text-45 mb-5 text-center" style="color:#012842;">Core Team</span>
    <div class="d-flex justify-content-between flex-wrap">
        <div class="core-team">
            <img class="img-background" src="{{ asset('img/Isolation_Mode_3.png') }}" alt="">
            <img class="img-display" src="{{ asset('img/image.png') }}" alt="">
            <p class="core-team-name">Ms. Thanh Tuyền <span class="core-team-role">Phó giám đốc</span></p>
            <p>“Lựa chọn phong cách cổ điển có thể phản ánh sự trân trọng đối với sự thanh lịch vượt thời gian, tính đối xứng và vẻ đẹp trường tồn lấy cảm hứng từ các nền văn minh lịch sử.”</p>
        </div>
        <div class="core-team">
            <img class="img-background" src="{{ asset('img/Isolation_Mode_3.png') }}" alt="">
            <img class="img-display" src="{{ asset('img/image.png') }}" alt="">
            <p class="core-team-name">Ms. Thanh Tuyền <span class="core-team-role">Phó giám đốc</span></p>
            <p>“Lựa chọn phong cách cổ điển có thể phản ánh sự trân trọng đối với sự thanh lịch vượt thời gian, tính đối xứng và vẻ đẹp trường tồn lấy cảm hứng từ các nền văn minh lịch sử.”</p>
        </div>
        <div class="core-team">
            <img class="img-background" src="{{ asset('img/Isolation_Mode_3.png') }}" alt="">
            <img class="img-display" src="{{ asset('img/image.png') }}" alt="">
            <p class="core-team-name">Ms. Thanh Tuyền <span class="core-team-role">Phó giám đốc</span></p>
            <p>“Lựa chọn phong cách cổ điển có thể phản ánh sự trân trọng đối với sự thanh lịch vượt thời gian, tính đối xứng và vẻ đẹp trường tồn lấy cảm hứng từ các nền văn minh lịch sử.”</p>
        </div>
    </div>
</div>

@endsection