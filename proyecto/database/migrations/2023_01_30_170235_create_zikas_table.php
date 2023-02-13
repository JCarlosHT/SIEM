<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZikasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zikas', function (Blueprint $table) {
            $table->id();
            $table->Integer('semana');
            $table->Integer('anio');
            $table->Integer('casos');
            $table->Integer('casos_nac');
            $table->Integer('casos_emb');
            $table->Integer('casos_emb_nac');
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
        Schema::dropIfExists('zikas');
    }
}
