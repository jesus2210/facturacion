<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create table companies
           Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('street');
            $table->string('street2');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('country');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('rfc');
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
        //
        Schema::drop('companies');
    }
}
