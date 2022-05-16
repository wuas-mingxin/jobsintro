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
            'firstname' => 'Umair',
            'lastname' => 'Aqib',
            'username' => 'user',
            'email' => 'user@wuas.com',
            'avtar' => 'wuas-content/upload/images/user/2022/04/aneesa.jpg',
            'cover' => 'wuas-content/upload/images/user/2022/04/aneesa.jpg',
            'background_image' => 'wuas-content/upload/images/user/2022/04/aneesa.jpg',
            'avtar' => 'wuas-content/upload/images/d-avatar.jpg',
            'cover' => 'wuas-content/upload/images/d-cover.jpg',
            'background_image' => 'wuas-content/upload/images/d-cover.jpg',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Zeeshan',
            'firstname' => 'Zeeshan',
            'lastname' => 'Mughal',
            'name' => 'Zeeshan',
            'username' => 'zeeshan',
            'email' => 'Zeeshan@zeeshan.com',
            'avtar' => 'wuas-content/upload/images/user/2022/04/aneesa.jpg',
            'cover' => 'wuas-content/upload/images/user/2022/04/aneesa.jpg',
            'background_image' => 'wuas-content/upload/images/user/2022/04/aneesa.jpg',
            'password' => Hash::make('password'),
        ]);

       
    }
}
