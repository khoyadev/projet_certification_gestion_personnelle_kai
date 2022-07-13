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
        Schema::create('employees', function (Blueprint $table) {

            $table->id();
            $table->String('nom');
            $table->String('prenom');
            $table->String('email');
            $table->enum('sexe', ['femme', 'homme']);
            $table->String('CIN');
            $table->integer('CNSS');
            $table->enum('statut_matrimoniel', ['celibataire', 'marie']);
            $table->integer('nombre_enfants');
            $table->String('telephone');
            $table->String('adresse');
            $table->date('date_naissance');
            $table->String('nom_prenom_contact_urgence');
            $table->String('telephone_contact_urgence');

            $table->foreignId('fonction_id')->constrained();
            $table->foreignId('departement_id')->constrained();

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
        Schema::dropIfExists('employees');
    }
};
