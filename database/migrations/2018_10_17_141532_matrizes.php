<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Matrizes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('matrizes')) {
            Schema::create('matrizes', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('cursos_id')->index();
                $table->bigInteger('disciplinas_id')->index();
                $table->foreign('cursos_id')->references('id')->on('cursos')->onUpdate('cascade')->parent()->onDelete('cascade');
                $table->foreign('disciplinas_id')->references('id')->on('disciplinas')->onUpdate('cascade')->parent()->onDelete('cascade');
                $table->smallInteger('periodo');
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
        Schema::dropIfExists('matrizes');
    }
}
