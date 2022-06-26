<?php

  namespace App\Service;
  use App\Repository\RankingRepository;
  use Illuminate\Database\Eloquent\Collection;

  class RankingService
  {
    public function getRankingByChannel(){
    $watchedTime = RankingRepository::getRankingByChannel();
    $userRecords = self::filterByUserRecord($watchedTime);
    return self::createRankingByUserRecord($userRecords);
    } 

    public function createRankingByUserRecord(array $usersRecord){
      $arrayToReturn = [];
      $record = collect($usersRecord)->sortByDesc('minutes')->toArray();
      $record = self::getArrayWithNewKeys($record);
      foreach($record as $index => $user){
        $userPosition = self::getUserPosition($arrayToReturn,$user,$index);
        $arrayToReturn[] = [
          'position' => $userPosition,
          'channel_name' => $user['channel_name'],
          'user_name' => $user['user_name'],
          'watched_time' => $user['minutes'],
          'data' => $user['date'],
        ];
      }
      return $arrayToReturn;
    }

    public function getUserPosition(array $records, array $user, int $index){
      $lastRecord =  $records[$index -1] ?? null;
      if(empty($lastRecord)){
        return $index +1;
      }
      if($lastRecord['watched_time'] === $user['minutes']){
        return $lastRecord['position'];
      }
      return $index + 1;
    }

    public function getArrayWithNewKeys(array $array){
      return array_merge([],$array);
    }

    public function filterByUserRecord(Collection $users){
      return $users->toArray();
      return  $users->reduce(function($inicial, $user){
      if(empty($userInArray) ){
        $inicial[$user->users_id] = $user;
        return $inicial;
      }

      if($inicial[$user->users_id]->minutes < $user->minutes){
        $inicial[$user->users_id] = $user;
        return $inicial;
      }

      return $inicial;
      },[] );
    }
  }