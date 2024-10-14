@extends('components.layout')

@section('main-content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang Chu</a></li>
            <li class="breadcrumb-item active" aria-current="page">Du an</li>
        </ol>
    </nav>
</div>

@include('components.page_thumbnail', ['title' => 'Du an'])
<div class="container">
    <div style="display: flex; justify-content: center; margin: 25px 0">
        <ul class="menu-tool-bar menu-project">
            <li class="active"><a href="">Tat ca</a></li>
            <li><a href="">Kien truc</a></li>
            <li><a href="">Noi that</a></li>
        </ul>
    </div>

    <div class="row">
        @for ($i = 0; $i<=10; $i++) 
        <div class="box-project"
            style="">
            <div class="project">
                <img src="{{ $i % 3 == 0 ? asset('img/image.png') : ($i % 3 == 2 ? asset('img/image_2.png') : asset('img/bg.jfif')) }}" alt="">
            </div>
            <p style="font-size: 24px; margin: 15px 0 5px">The number 1</p>
            <p style="color: #676767">Mỹ đình, từ liêm, hà nội</p>
        </div>
        @endfor
    </div>
</div>
<div style="height: 3px; background: #D1AD53; margin-top: 35px"></div>
@endsection