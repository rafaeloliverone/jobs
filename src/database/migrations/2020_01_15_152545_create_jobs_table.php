<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('location', 150);
            $table->string('challenge');
            $table->text('description');
            $table->text('skills')->nullable();
            $table->string('job_type', 100)->nullable();
            $table->string('experience', 100)->nullable();
            $table->integer('range_salary_initial')->nullable();
            $table->integer('range_salary_final')->nullable();
            $table->integer('company_id')->unsigned();
            $table->integer('hiring_contact')->unsigned();
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('hiring_contact')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
