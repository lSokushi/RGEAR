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
        Schema::table('publications', function (Blueprint $table) {
            $table->integer('section_id')->nullable(); // Campo para identificar a seção
        });
    }
    
    public function down()
    {
        Schema::table('publications', function (Blueprint $table) {
            $table->dropColumn('section_id');
        });
    }
};
