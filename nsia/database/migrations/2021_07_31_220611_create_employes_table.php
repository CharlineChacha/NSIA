<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('poste_id');
            $table->string('nomEmploye');
            $table->string('prenomEmploye');
            $table->string('mailEmploye')->unique();
            $table->string('password');
            $table->integer('numeroTelinterne')->unique();
            $table->string('photoEmploye') ->unique();

            $table->timestamps();

            $table->foreign('poste_id')->references('id')->on('postes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employes');
    }
}
