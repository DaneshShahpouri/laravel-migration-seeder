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

            $table->id();

            $table->string('company', 100);
            $table->string('first_station', 120)->nullable();
            $table->string('last_station', 120)->nullable();
            $table->time('departure_time')->nullable();
            $table->date('departure_date')->nullable();
            $table->time('arrival_time')->nullable();
            $table->date('arrival_date')->nullable();
            $table->string('train_code', 8);
            //Ho immaginato un codice univoco alfanumerico che identifica i treni
            //A questo punto ne specifico la lunghezza (8), ma potrebbe essere più
            //saggio lasciarla indefinita per modifiche future. (?) 
            $table->tinyInteger('wagons_number')->nullable();
            $table->boolean('is_in_time')->nullable();
            $table->boolean('is_delete')->nullable();

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
