<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('currencies', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('currency_name')->unique();
        //     $table->tinyInteger('is_root')->default(0)->comment('0=no,1=yes');
        //     $table->double('conversion_rate')->nullable();
        //     $table->integer('conversion_currency_id')->nullable();
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
        Schema::dropIfExists('currencies');
    }
}
