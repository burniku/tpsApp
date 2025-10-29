@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Add Student</h1>

<form action="{{ route('students.store') }}" method="POST" class="space-y-4">
    @csrf
    <input type="text" name="name" placeholder="Name" class="border p-2 w-full" required autocomplete="off">
    <input type="email" name="email" placeholder="Email" class="border p-2 w-full" required autocomplete="off">
    <select name="section_id" class="border p-2 w-full" required>
        <option value="">Select Section</option>
        @foreach($sections as $section)
            <option value="{{ $section->id }}">{{ $section->name }}</option>
        @endforeach
    </select>

    <div class="flex space-x-2">
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
        <a href="{{ route('students.index') }}" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Cancel</a>
    </div>
</form>
@endsection
