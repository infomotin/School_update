<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_details', function (Blueprint $table) {
            $table->id();
            $table->id();
            $table->integer('assign_student_id')->comment('assign_student_id=assign_student_id');
            //Student Information
            $table->string('birth_certificate')->nullable();
            $table->tinyInteger('special_need')->default(0)->comment('0=no,1=yes');
            $table->string('nationality')->nullable();
            $table->string('blood')->nullable();
            $table->string('alergic_info')->nullable();
            $table->string('vaccine_update')->nullable();
            $table->text('side_image')->nullable();

            //Responsible information
            $table->string('cr_name')->nullable();
            $table->string('cr_address')->nullable();
            $table->string('cr_relation')->nullable();
            $table->string('cr_contact')->nullable();
            $table->string('cr_nid')->nullable();
            $table->text('cr_photo')->nullable();

            //Father's information
            $table->string('f_employment')->nullable();
            $table->string('f_address')->nullable();
            $table->string('f_contact')->nullable();
            $table->string('f_nid')->nullable();
            $table->text('f_photo')->nullable();

            //Mother's information
            $table->string('m_employment')->nullable();
            $table->string('m_address')->nullable();
            $table->string('m_contact')->nullable();
            $table->string('m_nid')->nullable();
            $table->text('m_photo')->nullable();

            //Person to pick first
            $table->string('paf_name')->nullable();
            $table->string('paf_address')->nullable();
            $table->string('paf_relation')->nullable();
            $table->string('paf_contact')->nullable();
            $table->string('paf_nid')->nullable();
            $table->text('paf_photo')->nullable();

            //Person to pick second
            $table->string('pas_name')->nullable();
            $table->string('pas_address')->nullable();
            $table->string('pas_relation')->nullable();
            $table->string('pas_contact')->nullable();
            $table->string('pas_nid')->nullable();
            $table->text('pas_photo')->nullable();
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
        Schema::dropIfExists('student_details');
    }
}
