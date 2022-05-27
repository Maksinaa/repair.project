<?php

namespace Database\Seeders;
use App\Models\Office;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                // создать офис Оршанка
                Office::factory()
                ->count(1)
                ->orshanka()
                ->hasUsers(1, ['position' => 'administrator'])
                ->hasUsers(1, ['position' => 'master'])
                ->hasUsers(1, ['position' => 'consultant'])
                ->create();

            // создать офис Юрино
            Office::factory()
                ->count(1)
                ->yurino()
                ->hasUsers(1, ['position' => 'master'])
                ->hasUsers(1, ['position' => 'consultant'])
                ->create();
    }
}
