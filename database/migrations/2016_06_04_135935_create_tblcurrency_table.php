<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblcurrencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcurrency', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('currencycode');
            $table->string('currencyname');
            $table->string('chequebookcode');
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
        Schema::drop('tblcurrency');
    }
}
