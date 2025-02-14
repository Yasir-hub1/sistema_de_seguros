<?php

namespace Database\Seeders;

use App\Models\Cobertura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);
        $this->call(vehiculosSeeder::class);
        $this->call(CoberturaSeeder::class);
    }
}
