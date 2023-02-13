<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDenguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dengues', function (Blueprint $table) {
            $table->id();
            $table->Integer('semana');
            $table->Integer('anio');
            $table->Integer('cas_conf');
            $table->Integer('den_ng');
            $table->Integer('den_sa');
            $table->Integer('den_grav');
            $table->Integer('def');
            $table->String('mun');
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
        Schema::dropIfExists('dengues');
    }
}
