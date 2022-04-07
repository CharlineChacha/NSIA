<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvoirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avoir', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consommable_id');
            $table->unsignedBigInteger('fournisseur_id');
            $table->timestamps();
            $table->foreign('consommable_id')-> references('id')->on('consommables');
            $table->foreign('fournisseur_id')->references('id')->on('fournisseurs');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avoir');
    }
}
