<?php

use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            'Operating_system_be_used' => 'WINDOWS',
            'Software_issue' => 'Troubleshooting',
            'Description' => 'cannot run',
            'Status' => 'Pending',
            'User_id' => '1'
        ]);

//        DB::table('tickets')->insert([
//            'Operating_system_be_used' => 'LINUX',
//            'Software_issue' => 'Workaround',
//            'Description' => 'cannot run',
//            'Status' => 'Pending',
//            'User_id' => '2'
//        ]);
//
//        DB::table('tickets')->insert([
//            'Operating_system_be_used' => 'IOS',
//            'Software_issue' => 'Connection internet',
//            'Description' => 'Can not connect RMIT WIFI',
//            'Status' => 'Pending',
//            'User_id' => '3'
//        ]);
//
//        DB::table('tickets')->insert([
//            'Operating_system_be_used' => 'WINDOWS',
//            'Software_issue' => 'Workaround',
//            'Description' => 'Computer crashed',
//            'Status' => 'Pending',
//            'User_id' => '4'
//        ]);
//
//        DB::table('tickets')->insert([
//            'Operating_system_be_used' => 'IOS',
//            'Software_issue' => 'Troubleshooting',
//            'Description' => 'Computer crashed',
//            'Status' => 'Pending',
//            'User_id' => '5'
//        ]);
//
//        DB::table('tickets')->insert([
//            'Operating_system_be_used' => 'IOS',
//            'Software_issue' => 'Boom',
//            'Description' => 'cannot run',
//            'Status' => 'Pending',
//            'User_id' => '6'
//        ]);
//
//        DB::table('tickets')->insert([
//            'Operating_system_be_used' => 'WINDOWS',
//            'Software_issue' => 'Connection internet',
//            'Description' => 'Poor RMIT WIFI',
//            'Status' => 'Pending',
//            'User_id' => '7'
//        ]);
//
//        DB::table('tickets')->insert([
//            'Operating_system_be_used' => 'LINUX',
//            'Software_issue' => 'Workaround',
//            'Description' => 'cannot run',
//            'Status' => 'Pending',
//            'User_id' => '8'
//        ]);
//
//        DB::table('tickets')->insert([
//            'Operating_system_be_used' => 'IOS',
//            'Software_issue' => 'Troubleshooting',
//            'Description' => 'cannot run',
//            'Status' => 'Pending',
//            'User_id' => '9'
//        ]);
//
//        DB::table('tickets')->insert([
//            'Operating_system_be_used' => 'WINDOWS',
//            'Software_issue' => 'Workaround',
//            'Description' => 'cannot connect with RMIT WIFI',
//            'Status' => 'Pending',
//            'User_id' => '2'
//        ]);
    }
}