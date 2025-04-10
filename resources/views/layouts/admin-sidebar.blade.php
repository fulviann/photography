<div class="w-64 bg-gray-800 text-white h-screen fixed">
    <div class="p-4">
        <h2 class="text-xl font-bold">Admin Menu</h2>
    </div>
    <nav class="mt-4">
        <a href="{{ route('admin.dashboard') }}" 
           class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white">
           <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
        </a>
        <a href="/admin/static-dashboard" 
           class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white">
           <i class="fas fa-eye mr-2"></i> Demo Statis
        </a>
        <a href="{{ route('admin.contents.index') }}" 
           class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white">
           <i class="fas fa-file-alt mr-2"></i> Kelola Konten
        </a>
    </nav>
</div>
