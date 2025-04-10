<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewDatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AdminUserSeeder::class,
        ]);
    }
}
