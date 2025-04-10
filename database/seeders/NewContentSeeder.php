<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;

class NewContentSeeder extends Seeder
{
    public function run()
    {
        Content::create([
            'title' => 'Contoh Konten 1',
            'description' => 'Deskripsi contoh konten pertama'
        ]);

        Content::create([
            'title' => 'Contoh Konten 2',
            'description' => 'Deskripsi contoh konten kedua' 
        ]);
    }
}
