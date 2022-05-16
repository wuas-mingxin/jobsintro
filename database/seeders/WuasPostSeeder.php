<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;
use Carbon\Carbon;
class WuasPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wuas_posts')->insert([
            'post_text' => 'This is my Post',
            'user_id' => '1',
            'post_file' => 'wuas-content/upload/images/user/2022/04/aneesa.jpg',
            'status' => 1,
           
        ]);

        DB::table('wuas_posts')->insert([
            'post_text' => 'This is my Post',
            'user_id' => '1',
            'post_file' => 'wuas-content/upload/images/user/2022/04/aneesa.jpg',
            'status' => 1,
            'shared_from' => 2
        ]);
    }
}
