<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class WuasShareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wuas_shares')->insert([
            'wuas_post_id'=>1,
            'user_id'=>1
        ]) ;
    }
}
