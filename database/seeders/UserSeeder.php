<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'WUAS',
            'username' => 'user',
            'email' => 'user@wuas.com',
            'avtar' => 'wuas-content/upload/images/user.jpg',
            'cover' => 'wuas-content/upload/images/user.jpg',
            'background_image' => 'wuas-content/upload/images/user.jpg',
            'password' => Hash::make('password'),
        ]);
    }
}
