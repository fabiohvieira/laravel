<?php

namespace App\Services;

use App\Models\User;

class UserService 
{

    public function all() 
    {

        $users = User::with('address_book')->select(['id','user','created_at','updated_at'])->paginate(10);

        return $users;

    }


}