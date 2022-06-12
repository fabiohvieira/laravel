<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesTask extends Model
{
    use HasFactory;

    public function task() {

        return $this->belongsTo('App\Models\Task', 'task_id', 'id');
        
    }
}
