@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Sections</h1>

<a href="{{ route('sections.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Section</a>

<table class="table-auto w-full mt-4 border">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-2 py-1 text-left">Name</th>
            <th class="px-2 py-1 text-left">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sections as $section)
        <tr>
            <td class="px-2 py-1">{{ $section->name }}</td>
            <td class="px-2 py-1">
                <a href="{{ route('sections.edit', $section) }}" class="text-blue-500">Edit</a>

                <!-- Delete Button triggers modal -->
                <button
                    class="text-red-500 ml-2"
                    onclick="openModal({{ $section->id }})">
                    Delete
                </button>

                <!-- Hidden form for deletion -->
                <form id="delete-form-{{ $section->id }}" action="{{ route('sections.destroy', $section) }}" method="POST" style="display:none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal -->
<div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
        <h2 class="text-lg font-bold mb-4">Confirm Deletion</h2>
        <p class="mb-4">Are you sure you want to delete this section?</p>
        <div class="flex justify-end space-x-2">
            <button onclick="closeModal()" class="px-4 py-2 rounded bg-gray-300 hover:bg-gray-400">Cancel</button>
            <button id="confirmDeleteBtn" class="px-4 py-2 rounded bg-red-500 text-white hover:bg-red-600">Delete</button>
        </div>
    </div>
</div>

<script>
    let deleteFormId = null;

    function openModal(sectionId) {
        deleteFormId = sectionId;
        document.getElementById('deleteModal').classList.remove('hidden');
        document.getElementById('deleteModal').classList.add('flex');
    }

    function closeModal() {
        deleteFormId = null;
        document.getElementById('deleteModal').classList.add('hidden');
        document.getElementById('deleteModal').classList.remove('flex');
    }

    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
        if (deleteFormId) {
            document.getElementById('delete-form-' + deleteFormId).submit();
        }
    });
</script>
@endsection
