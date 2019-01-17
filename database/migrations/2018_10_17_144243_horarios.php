<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Horarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('horarios')) {
            Schema::create('horarios', function (Blueprint $table) {
                $table->increments('id');
                $table->smallInteger('dia_semana');
                $table->smallInteger('turno');
                $table->smallInteger('aula');
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
        Schema::dropIfExists('horarios');
    }
}
