<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHepatitisAgudasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hepatitis_agudas', function (Blueprint $table) {
            $table->id();
            $table->Integer('semana');
            $table->Integer('anio');
            $table->Integer('casos');
            $table->String('mun');
            $table->Integer('def');
            $table->Integer('iactivo')->default(1);
            $table->Integer('id_user');
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
        Schema::dropIfExists('hepatitis_agudas');
    }
}
