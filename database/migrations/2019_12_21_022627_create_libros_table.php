<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('titulo');
            $table->string('autor');
            $table->string('estatus', 30)->default('');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });

        Schema::create('estudiante_libro', function (Blueprint $table) {
            $table->unsignedBigInteger('estudiante_id');
            $table->unsignedBigInteger('libro_id');

            $table->foreign('estudiante_id')
                ->references('id')
                ->on('estudiantes')
                ->onDelete('cascade');

            $table->foreign('libro_id')
                ->references('id')
                ->on('libros')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante_libro');
        Schema::dropIfExists('libros');
    }
}
