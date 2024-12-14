<?php

use App\Http\Controllers\ProfileController;

Route::get('/my-profile/{id}', [ProfileController::class, 'index']);
