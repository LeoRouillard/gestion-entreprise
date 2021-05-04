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
        \App\Models\Organisation::factory()->create();
        //\App\Models\Mission::factory()->create();
        //\App\Models\MissionLine::factory()->create();
        //\App\Models\Transaction::factory()->create();
    }
}
