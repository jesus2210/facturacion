<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create table invoice_lines
        Schema::create('invoice_lines', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->float('unit_cost');
            $table->integer('qty');
            $table->float('total_cost');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
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
        //
        Schema::drop('invoice_lines');
    }
}
