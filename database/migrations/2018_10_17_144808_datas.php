<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('datas')) {
            Schema::create('datas', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('calendarios_id')->index();
                $table->foreign('calendarios_id')->references('id')->on('calendarios')->onUpdate('cascade')->parent()->onDelete('cascade');
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
        Schema::dropIfExists('datas');
    }
}
