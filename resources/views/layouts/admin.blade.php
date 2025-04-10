<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="admin-body">
    <div class="admin-container">
        <!-- Sidebar -->
        <div class="admin-sidebar">
            <div class="admin-brand">
                <h3>Admin Panel</h3>
            </div>
            <ul class="admin-menu">
                <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="{{ request()->is('admin/contents*') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-file-alt"></i> Manage Contents
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="admin-main">
            <nav class="admin-topbar">
                <div class="admin-user">
                    <span>Welcome, Admin</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="admin-logout">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </div>
            </nav>

            <div class="admin-content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
