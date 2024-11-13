<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubResearchLinesTable extends Migration
{
    public function up()
    {
        Schema::create('sub_research_lines', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->unsignedBigInteger('line_id');
            $table->timestamps();

            $table->foreign('line_id')->references('id')->on('research_lines')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_research_lines');
    }
}