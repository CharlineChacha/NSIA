<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImputationbudgetairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imputationbudgetaires', function (Blueprint $table) {
            $table->id();
            $table->string('codeAnalytique')->unique();
            $table->unsignedBigInteger('demande_id');
            $table->unsignedBigInteger('typeimputationbudgetaire_id');
            $table->string('montantBudgetAnnuel');
            $table->integer('realisationBudget');
            $table->integer('montantBudgetRestant');
            $table->integer('montantDepense');
            $table->integer('montantBudgetApresDepense');
            $table->text('observation');
            $table->timestamps();
            $table->foreign('demande_id')->references('id')->on('demandes');
            $table->foreign('typeimputationbudgetaire_id')->references('id')->on('typeimputationbudgetaires');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imputationbudgetaires');
    }
}
