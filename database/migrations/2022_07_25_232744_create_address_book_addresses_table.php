<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressBookAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_book_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('address_book_id');
            $table->string('address_line_1',40);
            $table->string('address_line_2',40);
            $table->string('address_line_3',40);
            $table->string('address_line_4',40);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_book_addresses');
    }
}
