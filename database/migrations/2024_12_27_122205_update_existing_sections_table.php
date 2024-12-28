<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateExistingSectionsTable extends Migration
{
    public function up()
    {
        Schema::table('sections', function (Blueprint $table) {
            // Atualizar as colunas existentes
            $table->string('slug')->default('default-slug')->nullable(false)->change();
            $table->unsignedBigInteger('page_id')->default(0)->nullable(false)->change();
        });
    }

    public function down()
    {
        Schema::table('sections', function (Blueprint $table) {
            // Reverter as alterações
            $table->string('slug')->nullable()->default(null)->change();
            $table->unsignedBigInteger('page_id')->nullable()->default(null)->change();
        });
    }
}
