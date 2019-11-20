<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BranchTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::unprepared('CREATE TRIGGER branchCode BEFORE INSERT ON `branches` FOR EACH ROW
                BEGIN
                set @auto_id := 100000+( SELECT AUTO_INCREMENT 
                    FROM INFORMATION_SCHEMA.TABLES
                    WHERE TABLE_NAME=`branches`
                      AND TABLE_SCHEMA=DATABASE() ); 
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
        DB::unprepared('DROP TRIGGER `branchCode`');
    }
}
