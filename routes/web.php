<?php

use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[TypeController :: class, 'index']) -> name('type.index');
