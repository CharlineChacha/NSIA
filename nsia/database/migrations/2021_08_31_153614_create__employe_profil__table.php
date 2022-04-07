<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeProfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_employe_profil_', function (Blueprint $table) {
            $table->id();
            $table-> unsignedBigInteger('profil_id');
            $table-> unsignedBigInteger('employe_id');
            $table->timestamps();
            $table->foreign('profil_id')->references('id')->on('profils')->onDelete('cascade');
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
        Schema::dropIfExists('_employe_profil_');
    }
}
