<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchLinesTable extends Migration
{
    public function up()
    {
        Schema::create('research_lines', function (Blueprint $table) {
            $table->id();
            $table->string('line_name', 100);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('research_lines');
    }
}

