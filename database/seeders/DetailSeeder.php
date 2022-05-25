<?php

namespace Database\Seeders;
use App\Models\Detail;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail::factory()
        ->count(1)
        ->name()
        ->create();

        Detail::factory()
        ->count(1)
        ->inn()
        ->create();

        Detail::factory()
        ->count(1)
        ->icq()
        ->create();
    }
}
