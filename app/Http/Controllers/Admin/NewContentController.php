<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class NewContentController extends Controller
{
    public function index()
    {
        $contents = Content::latest()->paginate(10);
        return view('admin.contents.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.contents.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'section' => 'required|string|max:255',
            'content_key' => 'required|string|max:255|unique:contents,content_key',
            'content_text' => 'required|string',
        ]);

        Content::create($validated);

        return redirect()->route('admin.contents.index')
            ->with('success', 'Content created successfully');
    }

    public function edit(Content $content)
    {
        return view('admin.contents.form', compact('content'));
    }

    public function update(Request $request, Content $content)
    {
        $validated = $request->validate([
            'section' => 'required|string|max:255',
            'content_key' => 'required|string|max:255|unique:contents,content_key,'.$content->id,
            'content_text' => 'required|string',
        ]);

        $content->update($validated);

        return redirect()->route('admin.contents.index')
            ->with('success', 'Content updated successfully');
    }

    public function destroy(Content $content)
    {
        $content->delete();

        return redirect()->route('admin.contents.index')
            ->with('success', 'Content deleted successfully');
    }
}
