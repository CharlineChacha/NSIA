<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModellesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consommable_id');
            $table->integer('referenceModel');
            $table->text('detailModel');
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
        Schema::dropIfExists('modelles');
    }
}
