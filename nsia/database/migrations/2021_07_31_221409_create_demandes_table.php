<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consommable_id');
            $table->unsignedBigInteger('employe_id');
           
            $table->text('details');
            $table->string('choix');
            $table->string('supplementaire');
            $table->timestamps();
            $table->foreign('consommable_id')->references('id')->on('consommables')->onDelete('cascade');
            $table->foreign('employe_id')->references('id')->on('employes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes');
    }
}
