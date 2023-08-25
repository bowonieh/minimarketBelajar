<?php

namespace Database\Seeders;

use App\Models\Perusahaan as AppPerusahaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Perusahaan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        AppPerusahaan::factory(1)->create();
    }
}
