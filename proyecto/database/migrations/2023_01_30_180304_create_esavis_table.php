<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsavisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esavis', function (Blueprint $table) {
            $table->id();
            $table->Integer('semana');
            $table->Integer('anio');
            $table->Integer('casos_cov');
            $table->Integer('casos_nocov');
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
        Schema::dropIfExists('esavis');
    }
}
