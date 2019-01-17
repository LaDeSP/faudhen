<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DisciplinasOferecidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('disciplinas_oferecidas')) {
            Schema::create('disciplinas_oferecidas', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('ofertas_id')->index();
                $table->bigInteger('disciplinas_id')->index();
                $table->foreign('ofertas_id')->references('id')->on('ofertas')->onUpdate('cascade')->parent()->onDelete('cascade');
                $table->foreign('disciplinas_id')->references('id')->on('disciplinas')->onUpdate('cascade')->parent()->onDelete('cascade');
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
        Schema::dropIfExists('disciplinas_oferecidas');
    }
}
