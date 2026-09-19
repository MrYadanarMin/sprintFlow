<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('board');
});

Route::get('/board', function () {
    return view('board');
});

Route::get('/backlog', function () {
    return view('backlog');
});

Route::get('/issue-detail', function () {
    return view('issue-detail');
});