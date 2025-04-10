<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100 transition-colors duration-300">

<div class="flex min-h-screen">
    <!-- Sidebar -->
    <div id="sidebar" class="bg-white dark:bg-gray-800 w-64 p-6 shadow-lg fixed md:relative z-20 transform md:translate-x-0 -translate-x-full transition-transform duration-200 ease-in-out">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-xl font-bold text-blue-600 dark:text-blue-400">📷 Admin Panel</h1>
            <button onclick="toggleSidebar()" class="md:hidden text-gray-500 dark:text-gray-300 hover:text-black dark:hover:text-white">
                ✖
            </button>
        </div>
        <nav class="space-y-3">
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-100 dark:hover:bg-gray-700 text-blue-600 dark:text-blue-400 font-semibold">Dashboard</a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Projects</a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Photography</a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">About</a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Contact</a>
        </nav>
    </div>

    <!-- Content -->
    <div class="flex-1 flex flex-col ml-0 md:ml-64">
        <!-- Topbar -->
        <header class="bg-white dark:bg-gray-800 shadow p-4 flex items-center justify-between md:hidden">
            <button onclick="toggleSidebar()" class="text-gray-700 dark:text-gray-300 text-xl">
                ☰
            </button>
            <span class="font-semibold text-lg">Admin Dashboard</span>
        </header>

        <!-- Toggle Mode -->
        <div class="p-4 text-right">
            <button onclick="toggleDarkMode()" class="px-3 py-1 bg-gray-300 dark:bg-gray-700 text-sm rounded hover:bg-gray-400 dark:hover:bg-gray-600 transition">
                Toggle Dark Mode
            </button>
        </div>

        <!-- Main -->
        <main class="p-6 space-y-8">
            <h2 class="text-2xl font-bold mb-4">Dashboard Overview</h2>

            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow text-center">
                    <h3 class="text-sm text-gray-500 dark:text-gray-400">Project</h3>
                    <p class="text-2xl font-bold">12</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow text-center">
                    <h3 class="text-sm text-gray-500 dark:text-gray-400">Photography</h3>
                    <p class="text-2xl font-bold">6</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow text-center">
                    <h3 class="text-sm text-gray-500 dark:text-gray-400">About</h3>
                    <p class="text-2xl font-bold">10</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow text-center">
                    <h3 class="text-sm text-gray-500 dark:text-gray-400">Contact</h3>
                    <p class="text-2xl font-bold">4</p>
                </div>
            </div>

            <!-- Form -->
          <!-- Form -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
                <h3 class="text-xl font-semibold mb-4">Tambah Konten</h3>
                <form id="contentForm" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <input id="sectionInput" type="text" class="border rounded-lg p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Section (e.g. about)">
                    <input id="keyInput" type="text" class="border rounded-lg p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Key (e.g. title)">
                    <input id="contentInput" type="text" class="border rounded-lg p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Text Content">
                    <input id="imageInput" type="text" class="md:col-span-3 border rounded-lg p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Image Path (optional)">
                    <div class="md:col-span-3 text-right">
                        <button 
                            type="button" 
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700"
                            onclick="submitForm()"
                        >
                            Simpan Konten
                        </button>
                    </div>
                </form>
            </div>


            <!-- Table -->
            <div class="overflow-x-auto bg-white dark:bg-gray-800 p-4 rounded-xl shadow">
                <table class="w-full text-sm border border-gray-200 dark:border-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th class="p-2 border dark:border-gray-600">ID</th>
                            <th class="p-2 border dark:border-gray-600">Section</th>
                            <th class="p-2 border dark:border-gray-600">Key</th>
                            <th class="p-2 border dark:border-gray-600">Content</th>
                            <th class="p-2 border dark:border-gray-600">Image Path</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100 max-h-[600px] overflow-y-auto">
                        @php
                            $data = [
                            ['id'=>1,'section'=>'project-7','key'=>'title','content'=>'Samokat office <br> <span class="fw-200">© 2021</span>','img'=>''],
                            ['id'=>2,'section'=>'project-7','key'=>'categories','content'=>'Architecture,Interior Design','img'=>''],
                            ['id'=>3,'section'=>'project-7','key'=>'photographer','content'=>'KIDZ Studio','img'=>''],
                            ['id'=>4,'section'=>'project-7','key'=>'main_image','content'=>null,'img'=>'assets/img/portfolio/project7/1.jpg'],
                            ['id'=>5,'section'=>'project-7','key'=>'subheading','content'=>'ART OF HOME','img'=>''],
                            ['id'=>6,'section'=>'project-7','key'=>'studio_name','content'=>'MAKHNO STUDIO','img'=>''],
                            ['id'=>7,'section'=>'project-7','key'=>'type','content'=>'Industrial enterprise office','img'=>''],
                            ['id'=>8,'section'=>'project-7','key'=>'location','content'=>'Ukraine','img'=>''],
                            ['id'=>9,'section'=>'project-7','key'=>'year','content'=>'2022','img'=>''],
                            ['id'=>10,'section'=>'project-7','key'=>'team','content'=>'Serhii Makhno, Olha Sobchyshyna, Alex Rekhlitskyi','img'=>''],
                            ['id'=>11,'section'=>'project-7','key'=>'description','content'=>'FUTURA is an uncompromising example of an office building...','img'=>''],
                            ['id'=>12,'section'=>'project-7','key'=>'gallery_images','content'=>'["img1.jpg","img2.jpg","img3.jpg"]','img'=>''],
                            ['id'=>13,'section'=>'project-7','key'=>'next_project_image','content'=>null,'img'=>'assets/img/portfolio/project1/1.jpg'],
                            ['id'=>14,'section'=>'photography','key'=>'header_text','content'=>'Bukan hanya menangkap visual...','img'=>''],
                            ['id'=>15,'section'=>'photography','key'=>'about_title','content'=>'The Story Behinds The Lens','img'=>''],
                            ['id'=>16,'section'=>'photography','key'=>'about_content','content'=>'Menangkap detail yang sering terlewat...','img'=>''],
                            ['id'=>17,'section'=>'photography','key'=>'photo_1','content'=>null,'img'=>'assets/img/photo-1.jpg'],
                            ['id'=>18,'section'=>'photography','key'=>'photo_2','content'=>null,'img'=>'assets/img/photo-2.jpg'],
                            ['id'=>19,'section'=>'photography','key'=>'photo_3','content'=>null,'img'=>'assets/img/photo-3.jpg'],
                            ['id'=>20,'section'=>'about','key'=>'title','content'=>'About Me','img'=>''],
                            ['id'=>21,'section'=>'about','key'=>'header_title','content'=>'Capture Moments, Create Stories Through the Lens','img'=>''],
                            ['id'=>22,'section'=>'about','key'=>'header_subtitle','content'=>'Fulvian Rayhan','img'=>''],
                            ['id'=>23,'section'=>'about','key'=>'header_description','content'=>'Saya adalah seorang mahasiswa...','img'=>''],
                            ['id'=>24,'section'=>'about','key'=>'services_title','content'=>'SNAP. CREATE. REPEAT.','img'=>''],
                            ['id'=>25,'section'=>'about','key'=>'experience_title','content'=>'10 years of experience','img'=>''],
                            ['id'=>26,'section'=>'about','key'=>'award_text','content'=>'Masters in Web Design (HONORS)','img'=>''],
                            ['id'=>27,'section'=>'about','key'=>'testimonial_name','content'=>'Fulvian Rayhan Renanda Putra','img'=>''],
                            ['id'=>28,'section'=>'about','key'=>'testimonial_id','content'=>'2702354256','img'=>''],
                            ['id'=>29,'section'=>'about','key'=>'footer_title','content'=>'time to roar!','img'=>''],
                            ['id'=>30,'section'=>'about','key'=>'bio','content'=>'I am a professional photographer...','img'=>''],
                            ['id'=>31,'section'=>'about','key'=>'profile_image','content'=>null,'img'=>'assets/img/about/profile.jpg'],
                            ['id'=>32,'section'=>'about','key'=>'testimonial_image','content'=>null,'img'=>'assets/img/ipul.jpg'],
                            ['id'=>33,'section'=>'contact','key'=>'business_hours','content'=>'Everyday','img'=>''],
                            ['id'=>34,'section'=>'contact','key'=>'address','content'=>'peruamahan 123','img'=>''],
                            ['id'=>35,'section'=>'contact','key'=>'email1','content'=>'rayhanfulvian@gmail.com','img'=>''],
                            ['id'=>36,'section'=>'contact','key'=>'phone1','content'=>'+62 859-3529-4049','img'=>''],
                            ['id'=>37,'section'=>'contact','key'=>'skype','content'=>'uts.underlord.my.id/photography','img'=>''],
                            ];
                        @endphp
                        @foreach ($data as $row)
                            <tr class="hover:bg-gray-50">
                            <td class="p-2 border">{{ $row['id'] }}</td>
                            <td class="p-2 border">{{ $row['section'] }}</td>
                            <td class="p-2 border">{{ $row['key'] }}</td>
                            <td class="p-2 border">{!! $row['content'] ?? '-' !!}</td>
                            <td class="p-2 border">{{ $row['img'] ?: '-' }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('-translate-x-full');
    }

    function toggleDarkMode() {
        document.documentElement.classList.toggle('dark');
    }

    function submitForm() {
        alert('✅ Berhasil menambahkan data!');

        // Clear input fields
        document.getElementById('contentForm').reset();
    }
</script>
<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('-translate-x-full');
    }

    function toggleDarkMode() {
        document.documentElement.classList.toggle('dark');
    }
</script>


</body>
</html>
