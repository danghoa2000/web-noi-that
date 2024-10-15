<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/introduce', function () {
    return view('introduce');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/project-detail', function () {
    return view('project_detail');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news-detail', function () { 
    return view('news_detail');
});

Route::get('/contact', function () { 
    return view('contact');
});
