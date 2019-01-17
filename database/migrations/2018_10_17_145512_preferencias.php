<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Preferencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('preferencias')) {
            Schema::create('preferencias', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('users_id')->index();
                $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->parent()->onDelete('cascade');
                $table->smallInteger('dia_semana');
                $table->smallInteger('turno');
                $table->smallInteger('aula_1')->default(0);
                $table->smallInteger('aula_2')->default(0);
                $table->smallInteger('aula_3')->default(0);
                $table->smallInteger('aula_4')->default(0);
                $table->smallInteger('aula_5')->default(0);
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
        Schema::dropIfExists('preferencias');
    }
}
