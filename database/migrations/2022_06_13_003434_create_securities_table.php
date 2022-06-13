<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecuritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('securities', function (Blueprint $table) {
            $table->id();
            $table->integer('role_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('object_name', 255);
            $table->boolean('run_application')->default(0);
            $table->boolean('view')->default(0);
            $table->boolean('add')->default(0);
            $table->boolean('change')->default(0);
            $table->boolean('delete')->default(0);

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
        Schema::dropIfExists('securities');
    }
}
