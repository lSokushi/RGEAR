<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */public function up()
{
    Schema::create('sections', function (Blueprint $table) {
        $table->id(); // ID da seção
        $table->string('name'); // Nome da seção (ex.: Artigos, Jogos)
        $table->timestamps(); // Timestamps opcionais
    });
}

public function down()
{
    Schema::dropIfExists('sections');
}

};
