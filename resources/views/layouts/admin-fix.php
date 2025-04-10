<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg p-6">
            <h1 class="text-2xl font-bold mb-8">Admin Panel</h1>
            <nav class="space-y-4">
                <a href="#" class="block text-gray-700 hover:text-blue-500">Dashboard</a>
                <a href="#" class="block text-gray-700 hover:text-blue-500">Users</a>
                <a href="#" class="block text-gray-700 hover:text-blue-500">Settings</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>

</body>
</html>
