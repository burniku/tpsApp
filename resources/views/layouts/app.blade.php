<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Sidebar / Navigation Drawer -->
 <!-- Sidebar / Navigation Drawer -->
<aside id="sidebar"
    class="fixed top-0 left-0 w-64 bg-white shadow-lg h-screen flex flex-col justify-between transform -translate-x-64 md:translate-x-0 transition-transform duration-300 z-40">

    <!-- Top section: Logo + nav links -->
    <div>
        <!-- Logo -->
        <div class="px-6 py-4 border-b flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">Laravel</h1>
            <button id="closeSidebar" class="md:hidden text-gray-600 hover:text-gray-800">
                ✕
            </button>
        </div>

        <!-- Navigation Links -->
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="{{ route('dashboard') }}" 
               class="block px-4 py-2 rounded-lg hover:bg-blue-100 hover:text-blue-700 {{ request()->routeIs('dashboard') ? 'bg-blue-500 text-white' : 'text-gray-700' }}">
               Dashboard
            </a>
            <a href="{{ route('students.index') }}" 
               class="block px-4 py-2 rounded-lg hover:bg-blue-100 hover:text-blue-700 {{ request()->routeIs('students.*') ? 'bg-blue-500 text-white' : 'text-gray-700' }}">
               Students
            </a>
            <a href="{{ route('sections.index') }}" 
               class="block px-4 py-2 rounded-lg hover:bg-blue-100 hover:text-blue-700 {{ request()->routeIs('sections.*') ? 'bg-blue-500 text-white' : 'text-gray-700' }}">
               Sections
            </a>
        </nav>
    </div>

    <!-- Bottom section: Logout + Footer -->
    <div class="px-6 py-4 border-t">
        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" 
                class="w-full text-left px-4 py-2 rounded-lg text-red-600 hover:bg-red-100 transition">
                Logout
            </button>
        </form>

        <!-- Footer -->
        <div class="mt-4 text-sm text-gray-500">
            TPS System © {{ date('Y') }}
        </div>
    </div>
</aside>

    <!-- Overlay for mobile -->
    <div id="overlay" 
        class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden md:hidden">
    </div>

    <!-- Main Content -->
    <div class="flex-1 min-h-screen ml-0 md:ml-64 transition-all duration-300">
        <!-- Top bar -->
        <header class="bg-white shadow px-4 py-3 flex items-center justify-between sticky top-0 z-20">
            <button id="openSidebar" class="md:hidden text-gray-700 text-2xl">
                ☰
            </button>
            <h2 class="text-xl font-semibold">Student & Section Management</h2>
        </header>

        <!-- Page Content -->
        <main class="p-6">
            @if(session('success'))
                <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
        
            
            @if(session('success delete'))
                <div class="bg-red-200 text-red-800 p-3 rounded mb-4">
                    {{ session('success delete') }}
                </div>
            @endif
            
            @if(session('success update'))
                <div class="bg-blue-200 text-blue-800 p-3 rounded mb-4">
                    {{ session('success update') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>


    <!-- Toggle Script -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const openBtn = document.getElementById('openSidebar');
        const closeBtn = document.getElementById('closeSidebar');

        openBtn.addEventListener('click', () => {
            sidebar.classList.remove('-translate-x-64');
            overlay.classList.remove('hidden');
        });

        closeBtn.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-64');
            overlay.classList.add('hidden');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-64');
            overlay.classList.add('hidden');
        });
    </script>

</body>
</html>
