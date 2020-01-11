<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmployeeTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::unprepared('CREATE TRIGGER EmployeesTrigger BEFORE INSERT ON `employees` FOR EACH ROW
        BEGIN
        set @auto_id := concat("EMP000",( SELECT AUTO_INCREMENT 
            FROM INFORMATION_SCHEMA.TABLES
            WHERE TABLE_NAME="employees"
              AND TABLE_SCHEMA=DATABASE() )); 
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
    }
}
