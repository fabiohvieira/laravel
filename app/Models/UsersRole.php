<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersRole extends Model
{
    use HasFactory;

    public function role() {

        return $this->belongsTo('App\Models\Role', 'role_id');

    }
}

