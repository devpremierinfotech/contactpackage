<?php

use Illuminate\Support\Facades\Route;
use Devpremierinfotech\Contact\Http\Controllers\ContactController;

Route::get('/contact', [ ContactController::class, 'index' ]);

Route::post('/contact', [ ContactController::class, 'send' ])

?>