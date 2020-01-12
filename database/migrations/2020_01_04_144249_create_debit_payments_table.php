<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebitPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debit_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unique_id')->nullable();
            $table->unsignedBigInteger('auction_id');
            $table->foreign('auction_id')->references('id')->on('auctions');
            $table->date('payment_date');
            $table->string('payment_type')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('cheque_number')->nullable();
            $table->date('cheque_date')->nullable();
            $table->decimal('amount', 8, 2);
            $table->decimal('payable_amount', 8, 2);
            $table->decimal('due_amount', 8, 2);
            $table->decimal('gst_amount', 8, 2);
            $table->decimal('processing_amount', 8, 2);
            $table->decimal('other_amount', 8, 2);
            $table->decimal('pay_amount', 8, 2);
            $table->text('remarks')->nullable();
            $table->enum('status', ['0', '1','3','4'])->default('1');
            $table->integer('created_by')->length(11);	
            $table->integer('updated_by')->length(11)->nullable();
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
        Schema::dropIfExists('debit_payments');
    }
}
