<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitionHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisition_heads', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id');
            $table->integer('req_no');
            $table->integer('created_by');
            $table->date('req_date');
            $table->tinyInteger('status')->default(0)->comment('0=pending,1=approved,2=rejected');
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
        Schema::dropIfExists('requisition_heads');
    }
}
