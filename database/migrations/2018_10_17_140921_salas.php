<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Salas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('salas')) {
            Schema::create('salas', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nome');
                $table->smallInteger('numero');
                $table->string('unidade',2);
                $table->integer('vagas');
                $table->string('bloco');
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
        Schema::dropIfExists('salas');
    }
}
