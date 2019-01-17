<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ensalamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('ensalamentos')) {
            Schema::create('ensalamentos', function (Blueprint $table) {
                $table->increments('id');

                $table->unsignedInteger('salas_id')->index();
                $table->foreign('salas_id')->references('id')->on('salas')->onUpdate('cascade')->parent()->onDelete('cascade');
                
                $table->unsignedInteger('users_id')->index();
                $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->parent()->onDelete('cascade');
                
                $table->unsignedInteger('turmas_id')->index();
                $table->foreign('turmas_id')->references('id')->on('turmas')->onUpdate('cascade')->parent()->onDelete('cascade');
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
        Schema::dropIfExists('ensalamentos');
    }
}
