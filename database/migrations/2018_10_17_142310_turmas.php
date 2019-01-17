<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Turmas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('turmas')) {
            Schema::create('turmas', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nome');
                $table->unsignedInteger('disciplinas_oferecidas_id')->index();
                $table->foreign('disciplinas_oferecidas_id')->references('id')->on('disciplinas_oferecidas')->onUpdate('cascade')->parent()->onDelete('cascade');
                $table->string('vagas');
                $table->string('tipo');
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
        Schema::dropIfExists('turmas');
    }
}
