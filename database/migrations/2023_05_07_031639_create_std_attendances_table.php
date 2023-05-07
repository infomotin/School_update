<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_attendances', function (Blueprint $table) {
            $table->id();
            $table->integer('id_no')->comment('user_tabale (id_no = id_no)');
            $table->date('att_date');
            $table->string('att_status')->comment('P=present, A=absent, L=late, E=early');
            $table->dateTime('login_time')->nullable();
            $table->dateTime('logout_time')->nullable();
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
        Schema::dropIfExists('std_attendances');
    }
}
