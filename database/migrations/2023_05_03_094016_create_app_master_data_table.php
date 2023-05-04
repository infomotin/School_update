<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppMasterDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_master_data', function (Blueprint $table) {
            //make inustitued master data table
            $table->id();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0=inactive,1=active');
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            // contact details
            $table->string('contact_no')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            // logo
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('footer_text')->nullable();
            // footer address
            $table->string('footer_address')->nullable();
            $table->string('footer_contact_no')->nullable();
            $table->string('footer_email')->nullable();
         //  date of stublisment
            $table->string('date_of_Stub')->nullable();
            $table->string('footer_whatsapp')->nullable();
            $table->string('footer_snapchat')->nullable();
        //    social media links
            $table->string('moto')->nullable();
            $table->string('mission')->nullable();  
            $table->string('vision')->nullable();
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
        Schema::dropIfExists('app_master_data');
    }
}
