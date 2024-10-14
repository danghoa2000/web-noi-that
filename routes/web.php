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

Route::get('/detail', function () {
    return view('project_detail');
});

Route::get('/news', function () {
    return view('news');
});
