<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditPaymentAuctionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_payment_auction_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unique_id')->nullable();
            $table->unsignedBigInteger('histroy_id');
            $table->foreign('histroy_id')->references('id')->on('credit_payment_auction_histories');
            $table->unsignedBigInteger('auction_id');
            $table->foreign('auction_id')->references('id')->on('auctions');
            $table->date('payment_date');
            $table->decimal('paid_amount', 8, 2);
            $table->decimal('pending_amount', 8, 2);
            $table->decimal('penalty_amount', 8, 2);
            $table->decimal('discount_amount', 8, 2);
            $table->decimal('credit_amount', 8, 2);
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
        Schema::dropIfExists('credit_payment_auction_details');
    }
}
