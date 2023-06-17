<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisition_details', function (Blueprint $table) {
            $table->id();
            $table->integer('req_main_id');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('unit_id');
            $table->integer('amount');
            $table->integer('currency_id');
            $table->integer('item_id');
            $table->double('item_qnty');
            $table->double('current_stock');
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
        Schema::dropIfExists('requisition_details');
    }
}
