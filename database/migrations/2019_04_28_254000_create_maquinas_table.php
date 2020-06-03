<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaquinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maquinas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('titulo_es')->nullable();
            $table->text('descripcion_es')->nullable();
            $table->text('ficha')->nullable();
            $table->text('orden')->nullable();
            $table->text('keyword_es')->nullable();
            $table->timestamps();
        });

        Schema::create('maquinas_esquemas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('maquina_id')->unsigned()->nullable();
            $table->foreign('maquina_id')->references('id')->on('maquinas')->onDelete('cascade');
            $table->bigInteger('esquema_id')->unsigned()->nullable();
            $table->foreign('esquema_id')->references('id')->on('esquemas')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('maquinas_prestaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('maquina_id')->unsigned()->nullable();
            $table->foreign('maquina_id')->references('id')->on('maquinas')->onDelete('cascade');
            $table->bigInteger('prestacion_id')->unsigned()->nullable();
            $table->foreign('prestacion_id')->references('id')->on('prestacions')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('maquinas_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('maquina_id')->unsigned()->nullable();
            $table->foreign('maquina_id')->references('id')->on('maquinas')->onDelete('cascade');
            $table->bigInteger('video_id')->unsigned()->nullable();
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('maquinas_relacionados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('maquina_id')->unsigned()->nullable();
            $table->foreign('maquina_id')->references('id')->on('maquinas')->onDelete('cascade');
            $table->bigInteger('relacion_id')->unsigned()->nullable();
            $table->foreign('relacion_id')->references('id')->on('maquinas')->onDelete('cascade');
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
        Schema::dropIfExists('maquinas');
    }
}
