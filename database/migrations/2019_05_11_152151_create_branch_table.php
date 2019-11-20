<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('branch_name', 100);
            $table->string('branch_code', 100)->unique();
            $table->string('unique_id');
            $table->string('email', 100)->unique();
            $table->string('phone_no', 100);
            $table->string('mobile_no', 100);	
            $table->string('division', 100)->nullable();
            $table->date('doo');
            $table->integer('age')->length(11);
            $table->text('address');
            $table->integer('bonus_days');
            $table->string('bonus_precentage', 100);
            $table->string('non_prize_subscriber_penalty', 100);
            $table->string('prize_subscriber_penalty', 100);
            $table->integer('penalty_days')->length(11);	
            $table->string('state', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('taluk', 100)->nullable();
            $table->string('pincode', 100)->nullable();
            $table->string('fd_total_month', 100)->nullable();
            $table->text('remarks', 100)->nullable();
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
        Schema::dropIfExists('branches');
    }
}
