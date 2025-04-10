<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('section');       // misal: 'photography', 'about', dll
            $table->string('content_key');   // key unik untuk konten
            $table->text('content_text')->nullable();    // isi konten
            $table->string('image_path')->default(''); // path untuk gambar
            $table->timestamps();            // created_at dan updated_at
            
            $table->unique(['section', 'content_key']); // pastikan kombinasi unik
        });
    }

    public function down()
    {
        Schema::dropIfExists('contents');
    }
};