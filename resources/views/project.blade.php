@extends('components.layout')

@section('css')
    @vite(['resources/sass/_project.scss'])
@endsection

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
<div class="container project-list">
    <div style="">
        <ul class="menu-tool-bar menu-project">
            <li class="active"><a href="">Tat ca</a></li>
            <li><a href="">Kien truc</a></li>
            <li><a href="">Noi that</a></li>
        </ul>
    </div>

    <div class="row">
        @for ($i = 0; $i<=2; $i++) 
            <div class="col-sm-4 col-12">
            @for ($j = 0; $j<=4; $j++)
                <div class="box-project" style="">
                    <div class="project">
                        <img src="{{ $i + $j % 3 == 0 ? asset('img/image.png') : ($i + $j % 3 == 2 ? asset('img/image_2.png') : asset('img/bg.jfif')) }}"
                            alt="">
                    </div>
                    <p class="text-24" style="margin: 15px 0 5px">The number 1</p>
                    <p style="color: #676767">Mỹ đình, từ liêm, hà nội</p>
                </div>
            @endfor
            </div>
        @endfor
    </div>
</div>
<div  class="end-line"></div>
@endsection