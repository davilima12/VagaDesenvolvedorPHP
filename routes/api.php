<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RankingController;

Route::get('/list-user',[RankingController::class,'listRanking']);
