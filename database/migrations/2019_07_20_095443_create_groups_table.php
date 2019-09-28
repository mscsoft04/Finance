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
            $table->bigIncrements('id');
            $table->integer('branch_id')->unsigned();
            $table->integer('schemes_id')->unsigned();
            $table->string('type');
            $table->string('name');
            $table->date('auction_date');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('type');
            $table->string('type');
            $table->string('type');

            
            $table->timestamps();
        });
        Schema::table('groups', function($table) {
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->foreign('schemes_id')->references('id')->on('schemes');
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
