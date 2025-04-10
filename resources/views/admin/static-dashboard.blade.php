@extends('layouts.admin-main')

@section('title', 'Admin Dashboard')

@section('content')
<div class="p-6 space-y-6">
    <!-- Stat Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-gray-500 text-sm font-medium">Total Pengguna</h3>
            <p class="text-3xl font-bold mt-2">1,234</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-gray-500 text-sm font-medium">Total Konten</h3>
            <p class="text-3xl font-bold mt-2">567</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-gray-500 text-sm font-medium">Aktivitas Hari Ini</h3>
            <p class="text-3xl font-bold mt-2">89</p>
        </div>
    </div>

    <!-- Recent Activity Table -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-bold mb-4">Aktivitas Terbaru</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pengguna</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aktivitas</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Waktu</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">1</td>
                        <td class="px-6 py-4 whitespace-nowrap">Admin</td>
                        <td class="px-6 py-4">Menambahkan konten baru</td>
                        <td class="px-6 py-4 whitespace-nowrap">2 menit lalu</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">2</td>
                        <td class="px-6 py-4 whitespace-nowrap">User</td>
                        <td class="px-6 py-4">Mengupdate profil</td>
                        <td class="px-6 py-4 whitespace-nowrap">15 menit lalu</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Form Example -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-bold mb-4">Tambah Konten Baru</h2>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Judul</label>
                <input type="text" class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Deskripsi</label>
                <textarea class="w-full px-3 py-2 border rounded-lg" rows="3"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                Simpan Konten
            </button>
        </form>
    </div>
</div>
@endsection
