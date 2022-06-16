<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('diagnostics_id');
            $table->string('name');
            $table->string('slug');
            $table->string('synonym');
            $table->text('what_is');
            $table->text('how_it_is_done');
            $table->string('average_duration');
            $table->string('contraindications_or_relative_restrictions');
            $table->text('service_guidelines');
            $table->text('achievement_orientation_or_preparation');
            $table->string('deadline');
            $table->timestamps();

            $table->foreign('diagnostics_id')->references('id')->on('diagnostic_methods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
