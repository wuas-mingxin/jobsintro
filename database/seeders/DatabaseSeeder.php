<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // UserSeeder::class,
            // AdminSeeder::class,
            // WuasGeneralSettingSeeder::class,
            // WuasPostSeeder::class,
            // WuasShareSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
        \App\Models\WuasPost::factory(500)->create();
    }
}
