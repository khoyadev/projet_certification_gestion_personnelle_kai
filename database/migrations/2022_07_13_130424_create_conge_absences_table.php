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
        Schema::create('conge_absences', function (Blueprint $table) {
            $table->id();
            $table->date('date_debut_conge_absence');
            $table->date('date_fin_conge_absence');
            $table->String('motif');
            $table->enum('statut', ['refuser', 'valider', 'en attente']);
            $table->foreignId('employee_id')->constrained();
            $table->foreignId('type_absence_id')->constrained();
            $table->foreignId('demande_conge_id')->constrained();
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
        Schema::dropIfExists('conge_absences');
    }
};
