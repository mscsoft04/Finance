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
            $table->string('subscriber_name');
            $table->string('Initial_name');
            $table->string('relation_type');
            $table->string('realtion_name');
            $table->date('dob');
            $table->integer('age')->unsigned();
            $table->string('gender');
            $table->string('marital_status');
            $table->date('doj');
            $table->string('mail_id');
            $table->string('mobile_no');
            $table->string('phone_no');
            $table->string('aadhar_no');
            $table->string('pan_no');
            $table->string('rationcard_no');
            $table->string('driving_licence');
            $table->string('voter_id');
            $table->string('gst_no');
            $table->text('p_address');
            $table->string('p_state');
            $table->string('p_district');
            $table->string('p_taluk');
            $table->string('p_pincode'); 
            $table->text('c_address');
            $table->string('c_state');
            $table->string('c_district');
            $table->string('c_taluk');
            $table->string('c_pincode'); 
            $table->string('agent_Type');
            $table->string('refered_by');
            $table->string('collection_area');
            $table->string('occupation');
            $table->string('retirement_date');
            $table->string('pf_no');
            $table->string('relationship');
            $table->string('relation_for');
            $table->text('additional_notes');
            $table->integer('created_by')->length(11);	
            $table->integer('updated_by')->length(11)->nullable();	
            $table->timestamps();
        });
        Schema::table('subscribers', function($table) {
            $table->foreign('branch_id')->references('id')->on('branches');
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
