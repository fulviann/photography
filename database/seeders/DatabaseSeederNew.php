<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeederNew extends Seeder
{
    public function run()
    {
        $this->call([
            ContentSeederFixed::class,
            AdminUserSeeder::class,
        ]);
    }
}
