<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressBookMaster extends Model
{
    use HasFactory;

    public function address() {

        return $this->belongsTo('App\Models\AddressBookAddress', 'id','address_book_id');

    }
}
