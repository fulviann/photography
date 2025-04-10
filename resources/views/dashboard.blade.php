@extends('layouts.admin-fix')

@section('content')
    <h2 class="text-3xl font-bold mb-6">Dashboard</h2>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <div class="bg-white p-6 rounded-2xl shadow-md">
            <h3 class="text-lg font-medium">Total Users</h3>
            <p class="text-4xl font-bold mt-2">1,245</p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-md">
            <h3 class="text-lg font-medium">Posts</h3>
            <p class="text-4xl font-bold mt-2">560</p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-md">
            <h3 class="text-lg font-medium">Comments</h3>
            <p class="text-4xl font-bold mt-2">3,012</p>
        </div>
    </div>

    <!-- Form Add User -->
    <div class="bg-white p-6 rounded-2xl shadow-md mb-10">
        <h3 class="text-xl font-semibold mb-4">Add New User</h3>
        <form action="#" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium">Name</label>
                <input type="text" name="name" class="w-full border border-gray-300 rounded-lg p-2">
            </div>
            <div>
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" class="w-full border border-gray-300 rounded-lg p-2">
            </div>
            <div>
                <label class="block text-sm font-medium">Password</label>
                <input type="password" name="password" class="w-full border border-gray-300 rounded-lg p-2">
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Submit</button>
        </form>
    </div>

    <!-- Table of Users -->
    <div class="bg-white p-6 rounded-2xl shadow-md">
        <h3 class="text-xl font-semibold mb-4">Users Table</h3>
        <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="p-2">Name</th>
                    <th class="p-2">Email</th>
                    <th class="p-2">Role</th>
                    <th class="p-2">Joined</th>
                    <th class="p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach([['Alice','alice@example.com','Admin','2025-01-10'], ['Bob','bob@example.com','User','2025-02-15'], ['Charlie','charlie@example.com','User','2025-03-01']] as $user)
                <tr class="border-t">
                    <td class="p-2">{{ $user[0] }}</td>
                    <td class="p-2">{{ $user[1] }}</td>
                    <td class="p-2">{{ $user[2] }}</td>
                    <td class="p-2">{{ $user[3] }}</td>
                    <td class="p-2">
                        <button class="text-blue-600 hover:underline">Edit</button>
                        <button class="text-red-600 hover:underline ml-2">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
