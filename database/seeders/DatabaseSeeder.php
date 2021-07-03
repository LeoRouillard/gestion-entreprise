<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Organisation;
use App\Models\Mission;
use App\Models\MissionLine;
use App\Models\Transaction;
use App\Models\Contribution;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $organisation = Organisation::factory()
            ->has(
                Mission::factory()
                    ->count(3)
                    ->has(
                        MissionLine::factory()
                            ->count(4),
                        'lines'
                    )
                    ->has(
                        Transaction::factory()
                        ->count(3)
                    )
                    
            )
            ->has(
                Contribution::factory()
            )
        ->create();
    }
}
