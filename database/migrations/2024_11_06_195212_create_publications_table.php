<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('authors', 255);
            $table->year('year');
            $table->text('summary')->nullable();
            $table->string('publication_location', 100)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('line_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('line_id')->references('id')->on('research_lines')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('publications');
    }
}