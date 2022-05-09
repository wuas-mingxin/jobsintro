<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'WUAS Admin',
            'username' => 'admin',
            'email' => 'admin@wuas.com',
            'password' => Hash::make('password'),
        ]);
    }
}
