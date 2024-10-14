@extends('components.layout')

@section('main-content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang Chu</a></li>
            <li class="breadcrumb-item active" aria-current="page">Du an</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-5">
            <img src="{{ asset('img/bg.jfif') }}" alt="">
        </div>
        <div class="col-7">
            <p class="project-title" style="font-size: 40px">Dự án 257 mỹ đình</p>
            <p style="color: #D1AD53; text-transform: uppercase;">Chủ đầu tư: Archi World</p>
            <hr style="color: #0D486F; margin: 15px 0">
            <div class="d-flex">
                <p style="flex: 1">Tổng diện tích: <span style="color: #D1AD53">21.479m2</span></p>
                <p style="flex: 1">Phạm vi công việc: <span style="color: #D1AD53">Thiết kế Kiến Trúc</span></p>
            </div>
            <p>Vị trí: Lô đất 16, đường Nguyễn Hữu Thọ, xã Phước Kiển, huyện Nhà Bè, thành phố Hồ Chí Minh</p>
            <p class="project-title" style="font-size: 24px; text-transform: uppercase; margin-top: 45px">ideal concept</p>
            <p>Màu củ đạo chiếm tỉ lệ lớn nhất trong bố cục để tạo nên sự đa dạng và điểm nhấn tronganh ương à Vàng. Bộ àu này đượính đn giản và nht quátrong tất cả các hbMàu phụ và màu nhấn sẽ là yếu tố làm nềnự ạđothiết kế. Màu sắc thương hiệu chính của chúng tôi là Xdvmcsử dụng để tăng khả năng tiếp cận,tơấn hoạt động truyền thông thương hiệu.  </p>
        </div>
    </div>

    <img style="margin-top: 2rem" src="{{ asset('img/bg.jfif') }}" alt="">
    <div class="row" style="margin-top: 2rem">
        @for ($i = 0; $i < 4; $i++)
        <div class="col-6" style="margin-bottom: 2rem">
            <img src="{{ asset('img/bg.jfif') }}" alt="">
        </div>
        @endfor
    </div>
</div>
<div style="height: 3px; background: #D1AD53; margin-top: 35px"></div>
@endsection
