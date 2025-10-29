@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Student</h1>

<form action="{{ route('students.update', $student) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $student->name }}" class="border p-2 w-full" required>
    <input type="email" name="email" value="{{ $student->email }}" class="border p-2 w-full" required>
    
    <select name="section_id" class="border p-2 w-full" required>
        @foreach($sections as $section)
            <option value="{{ $section->id }}" {{ $student->section_id == $section->id ? 'selected' : '' }}>
                {{ $section->name }}
            </option>
        @endforeach
    </select>

    <div class="flex space-x-2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('students.index') }}" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Cancel</a>
    </div>
</form>
@endsection
