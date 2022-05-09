<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class WuasGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wuas_groups')->insert([
            'group_name' => 'WUAS',
            'group_title' => 'Thit is WUAS Group',
            'avatar' => 'wuas-content/uploads/images/d-group.jpg',
            'cover' => 'wuas-content/uploads/images/d-group.jpg',
            'about' => 'PK',
            'category' => 1,
            'sub_category' => '',
            'privacy' => 1,
            'join_privacy' => 1,
            'status' => 0,
        ]);
    }
}
