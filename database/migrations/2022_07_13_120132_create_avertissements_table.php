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
        Schema::create('avertissements', function (Blueprint $table) {
            $table->id();
            $table->String('titre_avertissement');
            $table->String('description_avertissement');
            $table->date('date_avertissement');            
            $table->integer('nombre_avertissement');  
            $table->foreignId('employee_id')->constrained();          
            $table->foreignId('sanction_id')->constrained();          
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
        Schema::dropIfExists('avertissements');
    }
};
