<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('cursos')) {
            Schema::create('cursos', function (Blueprint $table) {
                $table->integer('id')->primary();
                $table->string('nome',256);
                $table->integer('qtd_semestre');
                $table->unsignedInteger('coordenador')->index()->parent()->nullable();
                $table->foreign('coordenador')->references('id')->on('users')->onUpdate('cascade')->parent()->onDelete('cascade');
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
        Schema::dropIfExists('cursos');
    }
}
