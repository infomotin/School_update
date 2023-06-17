<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('units', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('unit_name')->unique();
        //     $table->tinyInteger('is_root')->default(0)->comment('0=no,1=yes');
        //     $table->double('conversion_rate')->nullable();
        //     $table->integer('conversion_unit_id')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units');
    }
}
