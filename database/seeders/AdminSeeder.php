<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => ('admin101'),
            'email' => ('admin101@gmail.com'),
            'password' => bcrypt('passpass'),
            'phone_number' =>'0542754418',
            'username' => 'admin101',
            'role'=>('2'),
        ]);

        
    }
}
