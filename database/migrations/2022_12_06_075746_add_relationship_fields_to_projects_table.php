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
        Schema::table('projects', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id')->nullable();
            $table->foreign('student_id')->references('id')->on('students');
            $table->unsignedBigInteger('supervisor_id')->nullable();
            $table->foreign('supervisor_id')->references('id')->on('lecturers');
            $table->unsignedBigInteger('examiner1_id')->nullable();
            $table->foreign('examiner1_id')->references('id')->on('lecturers');
            $table->unsignedBigInteger('examiner2_id')->nullable();
            $table->foreign('examiner2_id')->references('id')->on('lecturers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign(['student_id']);
            $table->dropForeign(['supervisor_id']);
            $table->dropForeign(['examiner1_id']);
            $table->dropForeign(['examiner2_id']);
        });
    }
};
