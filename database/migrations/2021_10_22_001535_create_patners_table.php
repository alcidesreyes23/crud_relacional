<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patners', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('cantidadUsers');
            $table->unsignedBigInteger('framework_id');
            $table->foreign('framework_id')->references('id')->on('frameworks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patners');
    }
}
