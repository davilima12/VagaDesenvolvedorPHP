<?php

namespace App\Repository;
use App\Models\WatchedTime;


class RankingRepository 
{
  public function getRankingByChannel(){
    
    $ranking = WatchedTime::select(
      'users.id as users_id',
      'users.name as user_name',
      'channel.name as channel_name',
      'watched_time.minutes',
      'watched_time.date'
      )
    ->join('users', 'watched_time.user_id', '=', 'users.id')
    ->join('channel', 'channel.id', '=', 'watched_time.channel_id')
    ->get();
    
    return $ranking;
  } 
}