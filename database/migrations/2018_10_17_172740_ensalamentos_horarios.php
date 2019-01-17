<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EnsalamentosHorarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('ensalamentos_horarios')) {
            Schema::create('ensalamentos_horarios', function (Blueprint $table) {
                $table->increments('id');
                
                $table->unsignedInteger('ensalamentos_id')->index();
                $table->foreign('ensalamentos_id')->references('id')->on('ensalamentos')->onUpdate('cascade')->parent()->onDelete('cascade');
                
                $table->unsignedInteger('horarios_id')->index();
                $table->foreign('horarios_id')->references('id')->on('horarios')->onUpdate('cascade')->parent()->onDelete('cascade');

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
        Schema::dropIfExists('ensalamentos_horarios');
    }
}
