@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Manage Contents</h1>
        <a href="{{ route('admin.contents.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Content
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th width="5%">ID</th>
                            <th width="15%">Section</th>
                            <th width="20%">Key</th>
                            <th width="45%">Content</th>
                            <th width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
@if(isset($contents) && $contents->count() > 0)
    @foreach($contents as $content)
                        <tr>
                            <td>{{ $content->id }}</td>
                            <td>{{ $content->section }}</td>
                            <td>{{ $content->content_key }}</td>
                            <td class="text-truncate" style="max-width: 300px;">
                                {{ Str::limit($content->content_text, 50) }}
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.contents.edit', $content->id) }}" 
                                       class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.contents.destroy', $content->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" 
                                                onclick="return confirm('Are you sure?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">No contents found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                @else
                <div class="p-4 text-center text-gray-500">
                    Tidak ada data konten yang tersedia
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
