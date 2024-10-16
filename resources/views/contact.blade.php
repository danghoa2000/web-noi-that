@extends('components.layout')
@section('css')
    @vite(['resources/sass/_contact.scss'])
@endsection
@section('main-content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang Chu</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lien he</li>
        </ol>
    </nav>
</div>
<div class="contact-page">
    @include('components.page_thumbnail', ['title' => 'Lien He'])
</div>
<div class="container" style="margin-top: 60px">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-7 p-0">
            <div class="map">
                <img src="{{ asset('img/image.png') }}" alt="" style="width: 100%; height: 500px">
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-5 p-0">
            <form class="contact-form" action="#">
                <p class="project-title" style="">Liên hệ ngay với
                    chúng tôi để nhận tư vấn trực tiếp</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Tên của bạn *</label>
                            <input type="text" class="form-control" id="fullName" name="full_name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại của bạn *</label>
                            <input type="tel" class="form-control" id="phone" name="phone"
                                placeholder="name@example.com">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="address" class="form-label">address</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="note" class="form-label">Nội dung</label>
                        <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-18 btn-outline btn-outline-yellow" style="border-radius: 5px">Liên hệ ngay</button>
                </div>
            </form>
        </div>
    </div>
    <p class="project-title text-center text-50 mt-3" style="">Liên hệ với chúng tôi</p>
    <div class="contact-with-me">
        <div class="contact-item">
            <div class="icon">
                <img src="{{ asset('img/location-1.png') }}" alt="">
            </div>
            <span>Số 10LK01 - KĐT Roman Plaza, Đường Tố Hữu, Quận Nam Từ Liêm, Hà Nội</span>
        </div>
        <div class="contact-item">
            <div class="icon">
                <img src="{{ asset('img/phone.png') }}" alt="">
            </div>
            <span>Hotline: 0984668811 - 0933222288 </span>
        </div>
        <div class="contact-item">
            <div class="icon">
                <img src="{{ asset('img/at-email.png') }}" alt="">
            </div>
            <span>helenswisscells@gmail.com</span>
        </div>
    </div>
</div>

@endsection