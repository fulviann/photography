<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentControllerNew extends Controller
{
    public function index()
    {
        $contents = Content::orderBy('section')
                  ->orderBy('content_key')
                  ->paginate(10);
        return view('admin.contents.index', compact('contents'));
    }

    // Tambahkan method lainnya (create, store, edit, update, destroy) sesuai kebutuhan
}
