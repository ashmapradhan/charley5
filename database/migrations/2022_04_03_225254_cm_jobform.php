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
        Schema::create('newjobform', function (Blueprint $table) {
            $table->id('Submission_Id');
            $table->string('Job_Name');
            $table->string('Employee');
            $table->text('Description');
            $table->text('Materials');
            $table->date('Start_Date');
            $table->date('End_Date');
            $table->string('Status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newjobform');
    }
};
