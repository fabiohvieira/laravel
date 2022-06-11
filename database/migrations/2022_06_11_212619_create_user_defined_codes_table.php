<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDefinedCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_defined_codes', function (Blueprint $table) {
            $table->id();
            $table->string('product_code', 4);
            $table->string('user_defined_codes',2);
            $table->string('user_defined_code', 10);
            $table->string('description1', 30);
            $table->string('description2', 30)->nullable();
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
        Schema::dropIfExists('user_defined_codes');
    }
}
