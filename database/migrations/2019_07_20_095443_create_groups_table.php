<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->string('unique_id')->nullable();
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->unsignedBigInteger('schemes_id');
            $table->foreign('schemes_id')->references('id')->on('schemes');
            $table->string('type');
            $table->string('name');
            $table->integer('auction_day')->nullable();
            $table->string('auction_time');
            $table->date('first_auction_date')->nullable();
            $table->date('second_auction_date')->nullable();
            $table->date('last_auction_date')->nullable();
            $table->string('pso_number')->nullable();
            $table->date('pso_date')->nullable();
            $table->string('blaw_number')->nullable();
            $table->date('blaw_date')->nullable();
            $table->string('blaw_amount')->nullable();
            $table->string('fd_branch')->nullable();
            $table->string('fd_number')->nullable();
            $table->date('fd_date')->nullable();
            $table->string('fd_amount')->nullable();
            $table->string('commission')->nullable();
            $table->string('total_fd')->nullable();
            $table->string('fd_rate_interrest')->nullable();
            $table->string('fd_maturity_interest')->nullable();
            $table->date('fd_maturity_date')->nullable();
            $table->string('maturity_amount')->nullable();
            $table->string('fd_bank')->nullable();
            $table->string('cheque_no')->nullable();
            $table->string('company_chit')->nullable();
            $table->string('group_Type')->nullable();
            $table->enum('status', ['0', '1','2','3'])->default('1');
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
        Schema::dropIfExists('groups');
    }
}
