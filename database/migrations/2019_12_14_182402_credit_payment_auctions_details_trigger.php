<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreditPaymentAuctionsDetailsTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::unprepared('CREATE TRIGGER CreditPaymentAuctionDetails BEFORE INSERT ON `credit_payment_auction_details` FOR EACH ROW
        BEGIN
        set @auto_id := concat("PAYH000",( SELECT AUTO_INCREMENT 
            FROM INFORMATION_SCHEMA.TABLES
            WHERE TABLE_NAME="credit_payment_auction_details"
              AND TABLE_SCHEMA=DATABASE() )); 
           set new.unique_id= @auto_id;
           
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
