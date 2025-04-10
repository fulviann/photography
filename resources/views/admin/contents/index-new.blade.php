@extends('layouts.admin-main')

@section('title', 'Kelola Konten')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Daftar Konten</h2>
        <a href="{{ route('contents.create') }}" 
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
           + Tambah Konten
        </a>
    </div>

    <div class="bg-white rounded shadow overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left">ID</th>
                    <th class="px-6 py-3 text-left">Section</th>
                    <th class="px-6 py-3 text-left">Key</th>
                    <th class="px-6 py-3 text-left">Content</th>
                    <th class="px-6 py-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($contents as $content)
                <tr>
                    <td class="px-6 py-4">{{ $content->id }}</td>
                    <td class="px-6 py-4">{{ $content->section }}</td>
                    <td class="px-6 py-4">{{ $content->content_key }}</td>
                    <td class="px-6 py-4">{{ Str::limit($content->content_text, 50) }}</td>
                    <td class="px-6 py-4 flex space-x-2">
                        <a href="{{ route('contents.edit', $content->id) }}" 
                           class="text-blue-600 hover:text-blue-900">Edit</a>
                        <form action="{{ route('contents.destroy', $content->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-4">
            {{ $contents->links() }}
        </div>
    </div>
</div>
@endsection
