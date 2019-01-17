<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Calendarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('calendarios')) {
            Schema::create('calendarios', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('ofertas_id')->index();
                $table->foreign('ofertas_id')->references('id')->on('ofertas')->onUpdate('cascade')->parent()->onDelete('cascade');
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
        Schema::dropIfExists('calendarios');
    }
}
