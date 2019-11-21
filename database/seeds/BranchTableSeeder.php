<?php

use Illuminate\Database\Seeder;
use App\branch;

class BranchTableSeeder extends Seeder
{
    
    public $branches = array(
        array('id' => '1','branch_name' => 'Branch1','branch_code' => 'barach1','email' => 'mscs@04mailcom','phone_no' => '9000000000','mobile_no' => '9000000000','division' => 'CUDDALORE','doo' => '2019-10-09','age' => '67','address' => 'sssssssss','bonus_days' => '5','bonus_precentage' => '5','non_prize_subscriber_penalty' => '5','prize_subscriber_penalty' => '5','penalty_days' => '5','state' => 'Tamilnadu','city' => 'Cuddalore','taluk' => 'Bhuvanagiri','pincode' => '608602','fd_total_month' => '5','remarks' => '555555','created_by' => '1','updated_by' => '1','created_at' => '2019-10-29 19:56:40','updated_at' => '2019-11-06 21:15:22')
      );
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        branch::insert($this->branches);
    }
}
