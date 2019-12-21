<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('computadora_id');
            $table->string('nombre');
            $table->unsignedInteger('codigo')->unique();
            $table->string('correo')->unique();
            $table->date('fecha_nacimiento');
            $table->timestamps();

            $table->foreign('computadora_id')
                ->references('id')
                ->on('computadoras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
