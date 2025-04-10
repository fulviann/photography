<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;

class ContentSeederFixed extends Seeder
{
    public function run()
    {
        Content::create([
            'section' => 'photography',
            'content_key' => 'welcome_text',
            'content_text' => 'Selamat datang di galeri fotografi kami',
            'image_path' => ''
        ]);

        Content::create([
            'section' => 'about',
            'content_key' => 'profile',
            'content_text' => 'Ini adalah deskripsi profil tentang kami',
            'image_path' => ''
        ]);
    }
}
