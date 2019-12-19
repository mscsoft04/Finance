<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('branch_id')->unsigned();
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->string('unique_id')->nullable();
            $table->string('salutation_name');
            $table->string('subscriber_name');
            $table->string('Initial_name');
            $table->string('relation_type');
            $table->string('name_of_father');
            $table->string('realtion_name');
            $table->date('dob')->nullable();
            $table->integer('age')->unsigned();
            $table->string('gender');
            $table->string('marital_status');
            $table->date('doj')->nullable();
            $table->string('mail_id')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('aadhar_no')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('rationcard_no')->nullable();
            $table->string('driving_licence')->nullable();
            $table->string('voter_id')->nullable();
            $table->string('gst_no')->nullable();
            $table->text('p_address');
            $table->unsignedBigInteger('p_state')->unsigned();
            $table->foreign('p_state')->references('id')->on('states');

            $table->unsignedBigInteger('p_district')->unsigned();
            $table->foreign('p_district')->references('id')->on('cities');

            $table->unsignedBigInteger('p_taluk')->unsigned();
            $table->foreign('p_taluk')->references('id')->on('taluks');

            $table->unsignedBigInteger('p_village')->unsigned();
            $table->foreign('p_village')->references('id')->on('villages');
            $table->string('p_pincode'); 
            $table->text('c_address');
            $table->unsignedBigInteger('c_state')->unsigned();
            $table->foreign('c_state')->references('id')->on('states');
            $table->unsignedBigInteger('c_district')->unsigned();
            $table->foreign('c_district')->references('id')->on('cities');
            $table->unsignedBigInteger('c_taluk')->unsigned();
            $table->foreign('c_taluk')->references('id')->on('taluks');
            $table->unsignedBigInteger('c_village')->unsigned();
            $table->foreign('c_village')->references('id')->on('villages');
            $table->string('c_pincode'); 
            $table->string('agent_Type');
            $table->string('refered_by');
            $table->unsignedBigInteger('collection_area')->unsigned();
            $table->foreign('collection_area')->references('id')->on('collection_areas');
            $table->string('occupation');
            $table->date('retirement_date')->nullable();
            $table->string('pf_no')->nullable();
            $table->string('monthly_income')->nullable();
            $table->unsignedBigInteger('sourceof_fund')->unsigned();
            $table->foreign('sourceof_fund')->references('id')->on('source_of_funds');
            $table->unsignedBigInteger('relationship')->unsigned();
            $table->foreign('relationship')->references('id')->on('relationships');
            $table->string('relation_for')->nullable();
            $table->text('additional_notes')->nullable();
            $table->text('profile')->nullable();
            $table->enum('status', ['0', '1','2','3'])->default('1');
            $table->decimal('credit_amount', 8, 2)->nullable();
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
        Schema::dropIfExists('subscribers');
    }
}
