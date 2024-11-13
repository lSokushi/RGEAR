<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationTypeAssignmentsTable extends Migration
{
    public function up()
    {
        Schema::create('publication_type_assignments', function (Blueprint $table) {
            $table->unsignedBigInteger('publication_id');
            $table->unsignedBigInteger('publication_type_id');
            $table->primary(['publication_id', 'publication_type_id']);

            $table->foreign('publication_id')->references('id')->on('publications')->onDelete('cascade');
            $table->foreign('publication_type_id')->references('id')->on('publication_types')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('publication_type_assignments');
    }
}