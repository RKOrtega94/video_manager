<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::controller(VideoController::class)->prefix('videos')->group(function () {
    Route::get('/', 'index')->name('video.index');
});
