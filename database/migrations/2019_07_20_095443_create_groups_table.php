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
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->unsignedBigInteger('schemes_id');
            $table->foreign('schemes_id')->references('id')->on('schemes');
            $table->string('type');
            $table->string('name');
            $table->date('auction_date');
            $table->date('start_date');
            $table->date('first_due_date');
            $table->string('fd_number');
            $table->string('company_fd');
            $table->date('fd_date');
            $table->string('fd_bank');
            $table->string('pso_number');
            $table->string('blaw_number');
            $table->string('cheque_no');
            $table->string('company_chit');
            $table->string('auction_time');
            $table->string('commission');
            $table->string('total_fd');
            $table->string('fd_rate_interrest');
            $table->string('maturity_amount');
            $table->string('fd_branch');
            $table->date('pso_date');
            $table->date('blaw_date');
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
