@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Section</h1>

<form action="{{ route('sections.update', $section) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $section->name }}" class="border p-2 w-full" required>

    <div class="flex space-x-2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('sections.index') }}" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Cancel</a>
    </div>
</form>
@endsection
