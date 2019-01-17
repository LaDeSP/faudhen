<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ofertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('ofertas')) {
            Schema::create('ofertas', function (Blueprint $table) {
                $table->increments('id');
                $table->year('ano');
                $table->integer('semestre');
                $table->boolean('tipo');
                $table->boolean('status')->nullable();
                $table->date('data_inicio');
                $table->date('data_termino');
                $table->integer('cursos_id')->index();
                $table->foreign('cursos_id')->references('id')->on('cursos')->onUpdate('cascade')->parent()->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}
