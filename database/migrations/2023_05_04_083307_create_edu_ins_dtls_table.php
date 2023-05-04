<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEduInsDtlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edu_ins_dtls', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->comment('employee_id=user_id');
            $table->integer('edu_ins_id')->comment('edu_ins_id=edu_ins_id');
            $table->string('degree_name');
            $table->string('board');
            $table->string('passing_year');
            $table->string('result');
            $table->string('duration');
            $table->string('achievement')->nullable();
            $table->string('cgpa')->nullable();
            $table->string('group')->nullable();
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
        Schema::dropIfExists('edu_ins_dtls');
    }
}
