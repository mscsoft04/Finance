<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomineeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominee_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subscriber_id');
            $table->foreign('subscriber_id')->references('id')->on('subscribers');
            $table->string('salutation_name');
            $table->string('nominee_name');
            $table->string('Initial_name');
            $table->string('relation_type');
            $table->string('name_of_father');
            //$table->string('realtion_name');
            $table->date('dob')->nullable();
            $table->integer('age')->unsigned();
            $table->string('gender');
            $table->string('marital_status');
            $table->date('doj')->nullable();
            $table->string('mail_id')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('phone_no')->nullable();
            $table->text('address');
            $table->integer('state')->nullable();
            $table->integer('district')->nullable();
            $table->integer('taluk')->nullable();
            $table->integer('village')->nullable();
            $table->string('pincode'); 
            $table->string('occupation');
            $table->string('designation');
            $table->string('monthly_income')->nullable();
            $table->integer('sourceof_fund')->nullable();
            $table->integer('relationship')->nullable();
            $table->text('profile')->nullable();
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
        Schema::dropIfExists('nominee_details');
    }
}
