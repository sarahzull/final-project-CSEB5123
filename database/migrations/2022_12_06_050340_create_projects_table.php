<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('category')->nullable();
            $table->string('title');
            $table->unsignedBigInteger('stud_id')->nullable();
            $table->foreign('stud_id')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('supervisor_id')->nullable();
            $table->foreign('supervisor_id')->references('id')->on('lecturers')->onDelete('cascade');
            $table->unsignedBigInteger('examiner1_id')->nullable();
            $table->foreign('examiner1_id')->references('id')->on('lecturers')->onDelete('cascade');
            $table->unsignedBigInteger('examiner2_id')->nullable();
            $table->foreign('examiner2_id')->references('id')->on('lecturers')->onDelete('cascade');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
