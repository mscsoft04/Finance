<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unique_id')->nullable();
            $table->string('salutation_name');
            $table->string('employee_name');
            $table->string('employee_code');
            $table->string('Initial_name');
            $table->string('relation_type');
            $table->string('name_of_father');
            $table->date('dob')->nullable();
            $table->integer('age')->unsigned();
            $table->string('gender');
            $table->string('marital_status');
            $table->date('doj')->nullable();
            $table->integer('role')->nullable();
            $table->string('qualification')->nullable();
            $table->string('designation')->nullable();
            $table->unsignedBigInteger('document_id');
            $table->text('document_number');
            $table->string('mail_id')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('phone_no')->nullable();
            $table->text('address');
            $table->integer('state')->nullable();
            $table->integer('district')->nullable();
            $table->integer('taluk')->nullable();
            $table->integer('village')->nullable();
            $table->string('pincode'); 
            $table->string('porfile')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
