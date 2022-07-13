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
        Schema::create('type_absences', function (Blueprint $table) {
            $table->id();
            $table->String('titre');
            $table->enum('type_absence', ['absence_justifiee', 'conge_legal']);
            $table->String('couleur');
            
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
        Schema::dropIfExists('type_absences');
    }
};
