<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::where('section', 'photography')->get();
        return view('admin.contents.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.contents.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'content_key' => 'required|unique:contents,content_key',
            'content_text' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/photography');
            $imagePath = str_replace('public/', '', $imagePath);
        }

        Content::create([
            'section' => 'photography',
            'content_key' => $validated['content_key'],
            'content_text' => $validated['content_text'],
            'image_path' => $imagePath
        ]);

        return redirect()->route('admin.contents.index')->with('success', 'Content created successfully');
    }

    public function edit(Content $content)
    {
        return view('admin.contents.edit', compact('content'));
    }

    public function update(Request $request, Content $content)
    {
        $validated = $request->validate([
            'content_text' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($content->image_path) {
                Storage::delete('public/' . $content->image_path);
            }
            
            $imagePath = $request->file('image')->store('public/photography');
            $validated['image_path'] = str_replace('public/', '', $imagePath);
        }

        $content->update($validated);

        return redirect()->route('admin.contents.index')->with('success', 'Content updated successfully');
    }

    public function destroy(Content $content)
    {
        if ($content->image_path) {
            Storage::delete('public/' . $content->image_path);
        }
        
        $content->delete();
        return back()->with('success', 'Content deleted successfully');
    }
}