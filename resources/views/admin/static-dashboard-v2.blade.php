@extends('layouts.admin-main')

@section('title', 'Dashboard Admin - Tampilan Statis')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Dashboard Admin</h1>
        <div class="text-sm text-gray-500">
            {{ now()->format('l, d F Y') }}
        </div>
    </div>

    <!-- Stat Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                    <i class="fas fa-users text-xl"></i>
                </div>
                <div>
                    <p class="text-gray-500">Total Pengguna</p>
                    <p class="text-2xl font-bold">1,245</p>
                </div>
            </div>
        </div>
        <!-- Tambahkan card statistik lainnya -->
    </div>

    <!-- Tabel Responsive -->
    <div class="bg-white rounded-lg shadow overflow-hidden mb-8">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-800">Daftar Konten Terbaru</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <!-- Header tabel -->
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Baris data -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Form Contoh -->
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Tambah Konten Baru</h2>
        <form class="space-y-4">
            <!-- Input fields -->
            <div class="flex justify-end space-x-3">
                <button type="button" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
