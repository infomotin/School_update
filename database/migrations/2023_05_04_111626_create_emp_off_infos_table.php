<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpOffInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_off_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->comment('employee_id=user_id');
            $table->string('per_address')->comment('per_address=permanent_address');
            $table->string('nid')->nullable()->comment('pre_address=present_address');
            $table->string('tin')->nullable()->comment('nid=nid');
            //father and mother, spous  contract and address
            $table->string('emp_father_contract')->nullable()->comment('emp_spouse_name=emp_spouse_name');
            $table->string('emp_mother_contract')->nullable()->comment('emp_father_contract=emp_father_contract');
            $table->string('emp_father_address')->nullable()->comment('emp_mother_contract=emp_mother_contract');
            $table->string('emp_mother_address')->nullable()->comment('emp_father_address=emp_father_address');
            $table->string('emp_spouse_contract')->nullable()->comment('emp_mother_address=emp_mother_address');
            $table->string('emp_spouse_address')->nullable()->comment('emp_spouse_contract=emp_spouse_contract');
            //pay scale and bank info
            $table->string('bank_acc_no')->nullable()->comment('tin=tin');
            $table->string('bank_name')->nullable()->comment('bank_acc_no=bank_acc_no');
            $table->string('bank_branch')->nullable()->comment('bank_name=bank_name');
            $table->string('bank_routing_no')->nullable()->comment('bank_branch=bank_branch');
            $table->string('blood')->nullable()->comment('blood=blood');
            $table->string('pre_office_name')->nullable()->comment('pre_office_name=pre_office_name');
            $table->string('pre_office_address')->nullable()->comment('pre_office_address=pre_office_address');
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
        Schema::dropIfExists('emp_off_infos');
    }
}
