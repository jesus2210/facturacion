<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //create table partners
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('street');
            $table->string('street2');
            $table->integer('num_street');
            $table->string('city');
            $table->string('zip');
            $table->string('state');
            $table->string('country');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('razon_s');
            $table->string('rfc');
            $table->string('img');
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')
                  ->references('id')
                  ->on('companies')
                  ->onDelete('cascade');
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
        Schema::drop('partners');
    }
}
