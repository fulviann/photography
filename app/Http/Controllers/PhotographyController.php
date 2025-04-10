<?php

// app/Http/Controllers/PhotographyController.php
namespace App\Http\Controllers;

use App\Models\Content;

class PhotographyController extends Controller
{
    public function index()
{
    // Ambil semua field yang dibutuhkan sekaligus
    $contents = Content::where('section', 'photography')
                     ->select('content_key', 'content_text', 'image_path')
                     ->get()
                     ->keyBy('content_key');
    
    return view('pages.photography', compact('contents'));
}
}

?>