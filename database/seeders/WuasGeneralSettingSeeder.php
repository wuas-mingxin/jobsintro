<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class WuasGeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wuas_general_settings')->insert([
            'website_name' => 'JobsIntro',
            'website_logo' => 'wuas-content/upload/images/website-logo.png',
            'website_description' => 'This is website description',
            'active_template' => 'basic',
            'cur_text' => 'USD',
            'cur_sign' => '$',
            'force_ssl' => '0'
        ]);
    }
}
