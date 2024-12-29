<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveResearchLineFromPublicationsTable extends Migration
{
    public function up()
    {
        // Já removido manualmente, então nada a fazer aqui.
    }

    public function down()
    {
        Schema::table('publications', function (Blueprint $table) {
            $table->string('research_line')->nullable(); // Recria o campo se necessário
        });
    }
}
