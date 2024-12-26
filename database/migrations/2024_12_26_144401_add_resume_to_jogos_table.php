<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('jogos', function (Blueprint $table) {
            $table->text('resume')->nullable(); // Adiciona a coluna 'resume' como opcional
        });
    }
    
    public function down()
    {
        Schema::table('jogos', function (Blueprint $table) {
            $table->dropColumn('resume');
        });
    }
    
};
