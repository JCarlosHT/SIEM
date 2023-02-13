<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlacranismosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alacranismos', function (Blueprint $table) {
            $table->id();
            $table->Integer('semana');
            $table->Integer('anio');
            $table->Integer('casos');
            $table->Integer('dosis');
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
        Schema::dropIfExists('alacranismos');
    }
}
