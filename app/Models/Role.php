<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function tasks() {

        return $this->hasMany('App\Models\RolesTask','role_id');

    }
}
