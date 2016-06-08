<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblchequerequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tblchequerequests', function (Blueprint $table) {
            $table->bigIncrements('requestid');
            $table->integer('noofbooks');
            $table->integer('noofleaves');
            $table->string('originatingbranch');
            $table->string('accountnumber');
            $table->string('currency');
            $table->string('rangefrom');
            $table->string('rangeto');
            $table->string('collectionpoint');
            $table->string('requestby');
            $table->string('printedby');
            $table->string('authorisedby');
            $table->string('collectedby');
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
        Schema::drop('tblchequerequests');
    }
}
