<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentSeeder extends Seeder
{
    public function run()
    {
        $contents = [
            // Existing projects
             // New project-7 content
             [
                'section' => 'project-7',
                'content_key' => 'title',
                'content_text' => 'Samokat office <br> <span class="fw-200">© 2021</span>',
                'image_path' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'section' => 'project-7',
                'content_key' => 'categories',
                'content_text' => 'Architecture,Interior Design',
                'image_path' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'section' => 'project-7',
                'content_key' => 'photographer',
                'content_text' => 'KIDZ Studio',
                'image_path' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'section' => 'project-7',
                'content_key' => 'main_image',
                'content_text' => null,
                'image_path' => 'assets/img/portfolio/project7/1.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'section' => 'project-7',
                'content_key' => 'subheading',
                'content_text' => 'ART OF HOME',
                'image_path' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'section' => 'project-7',
                'content_key' => 'studio_name',
                'content_text' => 'MAKHNO STUDIO',
                'image_path' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'section' => 'project-7',
                'content_key' => 'type',
                'content_text' => 'Industrial enterprise office',
                'image_path' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'section' => 'project-7',
                'content_key' => 'location',
                'content_text' => 'Ukraine',
                'image_path' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'section' => 'project-7',
                'content_key' => 'year',
                'content_text' => '2022',
                'image_path' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'section' => 'project-7',
                'content_key' => 'team',
                'content_text' => 'Serhii Makhno, Olha Sobchyshyna, Alex Rekhlitskyi',
                'image_path' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'section' => 'project-7',
                'content_key' => 'description',
                'content_text' => 'FUTURA is an uncompromising example of an office building in the third millennium. A lot of bold decisions, starting with the color and ending with the rooftop garden. FUTURA challenges the ordinary and mundane, setting unprecedented standards for Ukrainian architecture.',
                'image_path' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'section' => 'project-7',
                'content_key' => 'gallery_images',
                'content_text' => '["assets/img/portfolio/project7/10.jpg","assets/img/portfolio/project7/11.jpg","assets/img/portfolio/project7/12.jpg"]',
                'image_path' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'section' => 'project-7',
                'content_key' => 'next_project_image',
                'content_text' => null,
                'image_path' => 'assets/img/portfolio/project1/1.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Photography section
            [
                'section' => 'photography',
                'content_key' => 'header_text',
                'content_text' => 'Bukan hanya menangkap visual, tapi juga mengabadikan momen, suasana, dan cerita yang tersembunyi dalam setiap sudut.'
            ],
            [
                'section' => 'photography',
                'content_key' => 'about_title',
                'content_text' => 'The Story Behinds The Lens'
            ],
            [
                'section' => 'photography',
                'content_key' => 'about_content',
                'content_text' => 'Menangkap detail yang sering terlewat,dari jalanan sepi sampai sudut kota yang penuh cerita. Fotografi bukan cuma soal objek, tapi soal rasa yang ditinggalkan setelahnya.'
            ],
            [
                'section' => 'photography',
                'content_key' => 'photo_1',
                'image_path' => 'assets/img/photo-1.jpg'
            ],
            [
                'section' => 'photography',
                'content_key' => 'photo_2',
                'image_path' => 'assets/img/photo-2.jpg'
            ],
            [
                'section' => 'photography',
                'content_key' => 'photo_3',
                'image_path' => 'assets/img/photo-3.jpg'
            ],

            // About section
            [
                'section' => 'about',
                'content_key' => 'title',
                'content_text' => 'About Me'
            ],
            [
                'section' => 'about',
                'content_key' => 'header_title',
                'content_text' => 'Capture Moments, Create Stories Through the Lens'
            ],
            [
                'section' => 'about',
                'content_key' => 'header_subtitle',
                'content_text' => 'Fulvian Rayhan'
            ],
            [
                'section' => 'about',
                'content_key' => 'header_description',
                'content_text' => 'Saya adalah seorang mahasiswa yang memiliki ketertarikan besar di bidang fotografi. Dari sekadar hobi, fotografi menjadi cara saya mengeksplorasi berbagai tempat dan melihat hal-hal sederhana dari sudut pandang yang berbeda. Bagi saya, setiap momen punya cerita, dan kamera adalah cara untuk membagikannya.'
            ],
            [
                'section' => 'about',
                'content_key' => 'services_title',
                'content_text' => 'SNAP. CREATE. REPEAT.'
            ],
            [
                'section' => 'about',
                'content_key' => 'experience_title',
                'content_text' => '10 years of experience'
            ],
            [
                'section' => 'about',
                'content_key' => 'award_text',
                'content_text' => 'Masters in Web Design (HONORS)'
            ],
            [
                'section' => 'about',
                'content_key' => 'testimonial_name',
                'content_text' => 'Fulvian Rayhan Renanda Putra'
            ],
            [
                'section' => 'about',
                'content_key' => 'testimonial_id',
                'content_text' => '2702354256'
            ],
            [
                'section' => 'about',
                'content_key' => 'footer_title',
                'content_text' => 'time to roar!'
            ],
            [
                'section' => 'about',
                'content_key' => 'bio',
                'content_text' => 'I am a professional photographer with 10 years of experience'
            ],
            [
                'section' => 'about',
                'content_key' => 'profile_image',
                'image_path' => 'assets/img/about/profile.jpg'
            ],
            [
                'section' => 'about',
                'content_key' => 'testimonial_image',
                'image_path' => 'assets/img/ipul.jpg'
            ],

             // Contact section
             [
                'section' => 'contact',
                'content_key' => 'business_hours',
                'content_text' => "Everyday"
            ],
            [
                'section' => 'contact',
                'content_key' => 'address', 
                'content_text' => "peruamahan 123"
            ],
            [
                'section' => 'contact',
                'content_key' => 'email1',
                'content_text' => 'rayhanfulvian@gmail.com'
            ],
            [
                'section' => 'contact',
                'content_key' => 'phone1',
                'content_text' => '+62 859-3529-4049'
            ],
            [
                'section' => 'contact',
                'content_key' => 'skype',
                'content_text' => 'uts.underlord.my.id/photography'
            ],
        ];

        foreach ($contents as $content) {
            Content::firstOrCreate(
                [
                    'section' => $content['section'],
                    'content_key' => $content['content_key']
                ],
                $content
            );
        }
    }
}

