<nav class="bg-white shadow-md w-full px-4 md:px-6 lg:px-8 py-3 rounded-b-xl transition-all duration-300 ease-in-out fixed top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Logo or brand name -->
        <a href="{{ url('/') }}" class="flex items-center space-x-2">
            <span class="text-2xl font-bold text-gray-800 tracking-wide">
                Laravel App
            </span>
        </a>

        <!-- Navigation links -->
        <div class="flex items-center space-x-6">
            <a href="{{ route('sections.index') }}" class="text-gray-700 hover:text-blue-600 transition">Sections</a>
            <a href="{{ route('students.index') }}" class="text-gray-700 hover:text-blue-600 transition">Students</a>

            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>
