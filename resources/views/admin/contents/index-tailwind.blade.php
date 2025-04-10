@extends('layouts.admin-main')

@section('title', 'Kelola Konten')

@section('content')
<div class="p-6 bg-white rounded-lg shadow">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Konten</h1>
        <a href="{{ route('admin.contents.create') }}" 
           class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center">
           <i class="fas fa-plus mr-2"></i> Tambah Konten
        </a>
    </div>

    @if(isset($contents) && $contents->count() > 0)
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Section</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Key</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Content</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($contents as $content)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $content->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $content->section }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $content->content_key }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">{{ Str::limit($content->content_text, 50) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <a href="#" class="text-blue-600 hover:text-blue-900">Edit</a>
                            <form action="#" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $contents->links() }}
    </div>
    @else
    <div class="bg-gray-50 p-4 rounded-lg text-center">
        <p class="text-gray-500">Belum ada data konten</p>
    </div>
    @endif
</div>
@endsection
