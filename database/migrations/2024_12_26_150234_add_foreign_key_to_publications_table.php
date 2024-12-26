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
            // Comentado porque a coluna já existe
            // $table->unsignedBigInteger('section_id')->nullable()->after('id');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('set null');
        });
    }
    
    public function down()
    {
        Schema::table('publications', function (Blueprint $table) {
            $table->dropForeign(['section_id']);
            // Comentado porque a coluna já existe
            // $table->dropColumn('section_id');
        });
    }
    
    
};
