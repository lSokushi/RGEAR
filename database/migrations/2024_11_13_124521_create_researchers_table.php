<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('researchers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nome do pesquisador
            $table->string('email')->nullable(); // Email do pesquisador
            $table->string('image'); // Imagem do pesquisador
            $table->string('area_of_expertise')->nullable(); // Área de especialização
            $table->enum('status', ['ativo', 'inativo'])->default('ativo'); // Status de participação
            $table->enum('direction', ['start', 'end'])->default('start'); // Direção da foto na view
            $table->timestamps(); // Created at e Updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('researchers');
    }
}
