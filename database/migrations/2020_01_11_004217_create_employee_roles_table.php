<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role');
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
        Schema::dropIfExists('employee_roles');
    }
}
