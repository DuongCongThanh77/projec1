<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('CongThanh', function () {
    return view('CongThanh');
});

Route::get('CongThanh/{ten}', function ($ten) {
    echo "xin chao".$ten;
})->where(['ten'=>'[a-z]+']);


Route::get('callController','MyController@xinchao');


Route::post('inten',['as'=>'inten','uses'=>'MyController@nhandulieu']);