@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
          <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-lg font-semibold text-gray-700">Welcome</h2>
            <p class="mt-2 text-gray-500">Manage your TPS system easily.</p>
        </div>
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-lg font-semibold text-gray-700">Students</h2>
            <p class="mt-2 text-3xl font-bold text-blue-600">{{ \App\Models\Student::count() }}</p>
        </div>
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-lg font-semibold text-gray-700">Sections</h2>
            <p class="mt-2 text-3xl font-bold text-green-600">{{ \App\Models\Section::count() }}</p>
        </div>
      
    </div>
@endsection
