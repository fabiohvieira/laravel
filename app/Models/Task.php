<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function relations() {

        return $this->hasMany('App\Models\Task', 'task_id', 'id');

    }

    public function parent() {

        return $this->belongsTo('App\Models\Task',  'task_id', 'id');

    }

}
