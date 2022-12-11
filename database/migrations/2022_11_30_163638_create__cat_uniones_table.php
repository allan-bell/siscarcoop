<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatUnionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CatUniones', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('Nombre',50);
            $table->timestamp('updated_at');
            $table->char('TipoUnion',1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CatUniones');
    }
}
