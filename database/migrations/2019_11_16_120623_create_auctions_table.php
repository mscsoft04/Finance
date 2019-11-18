<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subscriber_id');
            $table->foreign('subscriber_id')->references('id')->on('subscribers');
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->string('auction_number');
            $table->string('auction_amount');
            $table->date('auction_date');
            $table->string('commision_amount');
            $table->string('gst_amount');
            $table->string('dividend_amount');
            $table->string('each_dividend_amount');
            $table->string('due_amount');
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
        Schema::dropIfExists('auctions');
    }
}
