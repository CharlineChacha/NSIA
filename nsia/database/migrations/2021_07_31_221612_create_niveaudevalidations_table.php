<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNiveaudevalidationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niveaudevalidations', function (Blueprint $table) {
            $table->id();
            $table->boolean('niveau1');
            $table->unsignedBigInteger('employe_id');
            $table->unsignedBigInteger('demande_id');
            $table->boolean('niveau2');
            $table->boolean('niveau3');
            $table->timestamps();
            $table->foreign('employe_id')->references('id')->on('employes')->onDelete('cascade');
            $table->foreign('demande_id')->references('id')->on('demandes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('niveaudevalidations');
    }
}
