<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationLinesTable extends Migration
{
    public function up()
    {
        Schema::create('publication_lines', function (Blueprint $table) {
            $table->unsignedBigInteger('publication_id');
            $table->unsignedBigInteger('line_id');
            $table->timestamps();

            $table->primary(['publication_id', 'line_id']);
            $table->foreign('publication_id')->references('id')->on('publications')->onDelete('cascade');
            $table->foreign('line_id')->references('id')->on('research_lines')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('publication_lines');
    }
}