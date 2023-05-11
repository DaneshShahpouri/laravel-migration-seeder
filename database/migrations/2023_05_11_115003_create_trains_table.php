<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {

            $table->string('company');
            $table->string('first_station');
            $table->string('last_station');
            $table->timestamps('departure_time');
            $table->string('arrival_time');
            $table->id();
            $table->integer('wagons_number');
            $table->boolean('is_in_time');
            $table->boolean('is_delete');


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
        Schema::dropIfExists('trains');
    }
};
