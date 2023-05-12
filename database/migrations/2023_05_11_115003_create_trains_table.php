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
            $table->string('departure_station', 120)->nullable();
            $table->string('arrival_station', 120)->nullable();
            $table->datetime('departure_time')->nullable();
            $table->datetime('arrival_time')->nullable();
            $table->string('train_code', 8)->unique();
            //Ho immaginato un codice univoco alfanumerico che identifica i treni
            //A questo punto ne specifico la lunghezza (8), ma potrebbe essere più
            //saggio lasciarla indefinita per modifiche future. (?) 
            $table->tinyInteger('wagons_number')->nullable();
            $table->boolean('on_time')->nullable();
            $table->boolean('cancelled')->nullable();

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
