<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Security extends Model
{
    use HasFactory;


    public function user() {

        return $this->belongsTo('App\Models\User', 'user_id');

    }

    public function role() {

        return $this->belongsTo('App\Models\Role', 'role_id');

    }
}
