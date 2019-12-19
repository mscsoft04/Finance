<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditPaymentAuctionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_payment_auction_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unique_id')->nullable();
            $table->unsignedBigInteger('subscriber_id');
            $table->foreign('subscriber_id')->references('id')->on('subscribers');
            $table->date('payment_date');
            $table->decimal('paid_amount', 8, 2);
            $table->string('payment_type')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('cheque_number')->nullable();
            $table->date('cheque_date')->nullable();
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
        Schema::dropIfExists('credit_payment_auction_histories');
    }
}
