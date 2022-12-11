<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatCooperativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CatCooperativas', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('Nombre',200);
            $table->integer('Uniones');
            $table->integer('X')->nullable($value=true);
            $table->integer('Y')->nullable($value=true);
            $table->char('Especificacion',1)->default('G');
            $table->timestamp('updated_at');
            $table->string('Alias',100);
            $table->foreign('Uniones')->references('Id')->on('CatUniones');
            $table->foreign('Especificacion')->references('Id')->on('Vta_Exo_Especificacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CatCooperativas');
    }
}
