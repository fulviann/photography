<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentControllerFixed extends Controller
{
    public function index()
    {
        $contents = \App\Models\Content::orderBy('section')
                  ->orderBy('content_key')
                  ->paginate(10);
        return view('admin.contents.index-tailwind', compact('contents'));
    }

    public function create()
    {
        return view('admin.contents.create');
    }

    // Tambahkan method lainnya (store, edit, update, destroy) sesuai kebutuhan
}
