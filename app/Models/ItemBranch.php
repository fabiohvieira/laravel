<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemBranch extends Model
{
    use HasFactory;

    public function sales() {

        return $this->hasMany('App\Models\SalesDetail', 'item_id', 'id');
        
    }

    public function locations() {

        return $this->hasMany('App\Models\ItemLocation', 'item_id', 'id');
        
    }

}
