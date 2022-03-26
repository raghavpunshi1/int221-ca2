<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\DocsController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website;
use App\Http\Controllers\Mail;
use App\Http\Controllers\UploadFileController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

//problem 1-------------------adding two numbers------------
Route::view("/login", "users");
Route::post("/users", [AddController::class, 'getData']);

//Problem 2 (A)-----------uploading students info--------
Route::view("/docs", "user-docs");
Route::post("/upload-docs", [DocsController::class, 'getData']);

// Problem 2 (B)------------------uploading file------------
Route::get('/uploadfile', [UploadFileController::class, 'index']);
Route::post('/uploadfile', [UploadFileController::class, 'showUploadFile']);



// Problem 3-----------------send an email---------
// Mail is send from - abc123@gmail.com
// Mail sent to - raghavpunshi@gmail.com
Route::view("/sendmessage", "mail-form");
Route::post("/sendmessage", [MailController::class, 'getData']);
