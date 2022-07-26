<?php

namespace App\Services;

use App\Models\AddressBookAddress;
use App\Models\AddressBookMaster;

class AddressBookService {

    public static function store($request) {

        $addressbook = new AddressBookMaster();
        $addressbook->long_address_number = $request->long_address_number;
        $addressbook->tax_id = $request->tax_id;
        $addressbook->name =  $request->name;
        $addressbook->save();

        $addressbook_address = new AddressBookAddress();
        $addressbook_address->address_book_id = $addressbook->id;
        $addressbook_address->address_line_1 = $request->address_line_1;
        $addressbook_address->address_line_2 = $request->address_line_2;
        $addressbook_address->address_line_3 = $request->address_line_3;
        $addressbook_address->address_line_4 = $request->address_line_4;
        $addressbook_address->save();

        return $addressbook;
    }

    
}