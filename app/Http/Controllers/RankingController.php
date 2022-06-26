<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\RankingService;


class RankingController extends Controller
{
    public function listRanking(){
      $ranks = RankingService::getRankingByChannel();
      
      return response()->json($ranks);
    } 
}
