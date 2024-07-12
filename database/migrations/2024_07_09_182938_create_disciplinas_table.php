<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('id_curso')->unsigned();
            $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade');

            $table->string('disciplina');
            $table->string('codigo');
            $table->boolean('obrigatoria');
            $table->string('formacao');
            $table->integer('creditos');
            $table->integer('chs');
            $table->integer('chp');
            $table->integer('periodo');
            $table->string('unidade');
            $table->string('tipo_aprovacao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disciplinas');
    }
};
