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
        Schema::table('jogos', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Opcional: reverter o nome da coluna caso precise voltar.
        Schema::table('jogos', function (Blueprint $table) {
            $table->renameColumn('images', 'image_url');
        });
    }
};
