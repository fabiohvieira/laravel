<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressBookMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_book_masters', function (Blueprint $table) {
            $table->id();
            $table->string('long_address_number',255)->nullable();
            $table->string('tax_id', 20);
            $table->string('name', 255);
            $table->string('search_type', 10)->default('C');
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
        Schema::dropIfExists('address_book_masters');
    }
}
