<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockconsommablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockconsommables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consommable_id');
            $table->date('dateEntree');
            $table->integer('quantite');
            $table->timestamps();
            $table->foreign('consommable_id')->references('id')->on('consommables');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stockconsommables');
    }
}
