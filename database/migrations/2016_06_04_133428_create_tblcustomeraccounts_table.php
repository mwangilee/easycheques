<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblcustomeraccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcustomeraccounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('accountnumber');
            $table->string('basenumber');
            $table->string('branchcode');
            $table->string('accountcurrency');
            $table->string('lastrangefrom');
            $table->string('lastrangeto');
            $table->string('accountstatus');
            $table->string('address');
            $table->string('status');
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
        Schema::drop('tblcustomeraccounts');
    }
}
