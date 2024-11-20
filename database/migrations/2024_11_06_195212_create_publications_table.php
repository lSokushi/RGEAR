<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title');               // Título da publicação
            $table->string('author');              // Autor(es)
            $table->text('resume');                // Resumo
            $table->string('type');           // Tipo de item (ex.: artigo, jogo, etc.)
            $table->string('status');              // Status (Produção Interna, Participação Externa)
            $table->json('research_lines');        // Linhas de pesquisa (JSON)
            $table->json('images')->nullable();    // Imagens (JSON)
            $table->year('year');                  // Ano da publicação
            $table->string('location');            // Local da publicação
            $table->json('files')->nullable(); // Para armazenar os caminhos dos arquivos
            $table->timestamps();                  // created_at, updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('publications');
    }
}