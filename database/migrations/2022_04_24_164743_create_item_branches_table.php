<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_branches', function (Blueprint $table) {
            $table->id();
            $table->string('second_item_number', 50)->nullable();
            $table->string('third_item_number', 50)->nullable();
            $table->string('description1', 255)->nullable();
            $table->string('description2', 255)->nullable();
            $table->decimal('price',8,2);
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
        Schema::dropIfExists('item_branches');
    }
}
