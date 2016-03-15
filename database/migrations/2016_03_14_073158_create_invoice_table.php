<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create table invoices
        Schema::create('invoices', function(Blueprint $table){
            $table->increments('id');
            $table->integer('invoice_number');
            $table->string('description');
            $table->string('state');
            $table->date('date');
            $table->float('subtotal');
            $table->float('amount_total');
            $table->integer('payment_id')->insigned();
            $table->foreign('payment_id')
                  ->references('id')
                  ->on('payments')
                  ->onDelete('cascade');
            $table->integer('journal_id')->insigned();
            $table->foreign('journal_id')
                  ->references('id')
                  ->on('journals')
                  ->onDelete('cascade');     
            $table->integer('company_id')->insigned();
            $table->foreign('company_id')
                  ->references('id')
                  ->on('companies')
                  ->onDelete('cascade');
            $table->integer('partner_id')->insigned();
            $table->foreign('partner_id')
                  ->references('id')
                  ->on('partners')
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
        Schema::drop('invoices');
    }
}
