<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Disciplinas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('disciplinas')) {
            Schema::create('disciplinas', function (Blueprint $table) {
                $table->bigInteger('id')->primary();
                $table->string('nome',256);
                $table->integer('carga_horaria');
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
        Schema::dropIfExists('disciplinas');
    }
}
