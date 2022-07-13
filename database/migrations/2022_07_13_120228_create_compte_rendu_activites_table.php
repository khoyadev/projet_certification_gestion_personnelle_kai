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
        Schema::create('compte_rendu_activites', function (Blueprint $table) {
            $table->id();
            $table->String('titre_compte_rendu_activite');
            $table->String('description_compte_rendu_activite');
            $table->date('date_compte_rendu_activite');  
            $table->foreignId('employee_id')->constrained();
            $table->foreignId('projet_id')->constrained();
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
        Schema::dropIfExists('compte_rendu_activites');
    }
};
