<?php

namespace App\Repos;

use DB;
use App\Models\User;

class UserRepo
{
  public function getUsers ($select)
  {
      return User::select($select)
                 ->whereNull('deleted_at')
                 ->get();
  }

  public function getUserById ($userId, $select)
  {
      return User::select($select)
                  ->where('id', $userId)
                  ->whereNull('deleted_at')
                  ->firstOrFail();
  }

  public function storeUser ($user_type, $agent_id,  $name, $email, $password)
  {
      return User::create([
        'user_type' => $user_type,
        'agent_id' => $agent_id,
        'name' => $name,
        'email' => $email,
        'password' => $password,
    ]);
  }

  public function updateUserById ($userId, $user_type, $agent_id, $name, $email)
  {
      return User::where('id', $userId)
                  ->update([
                          'user_type' => $user_type,
                          'agent_id' => $agent_id,
                          'name' => $name,
                          'email' => $email,
                      ]);
  }

  public function deleteUserById ($userId)
  {
      return User::where('id', $userId)
                  ->update([
                          'deleted_at' => now()
                   ]);
  }



}