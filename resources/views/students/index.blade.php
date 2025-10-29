@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Students</h1>

<!-- Add Student Button -->
<div class="flex justify-between items-center mb-4">
    <a href="{{ route('students.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
        Add Student
    </a>

    <div class="flex items-center space-x-2">
        <label for="sortColumn" class="font-semibold">Sort By:</label>
        <select id="sortColumn" class="border rounded px-2 py-1">
            <option value="0">Name</option>
            <option value="1">Email</option>
            <option value="2">Section</option>
        </select>

        <button id="sortAsc" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
            A → Z
        </button>
        <button id="sortDesc" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
            Z → A
        </button>
    </div>
</div>

<table class="table-auto w-full mt-2 border" id="studentsTable">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-2 py-1 text-left">Name</th>
            <th class="px-2 py-1 text-left">Email</th>
            <th class="px-2 py-1 text-left">Section</th>
            <th class="px-2 py-1 text-left">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr class="hover:bg-gray-50">
            <td class="px-2 py-1">{{ $student->name }}</td>
            <td class="px-2 py-1">{{ $student->email }}</td>
            <td class="px-2 py-1">{{ $student->section->name }}</td>
            <td class="px-2 py-1">
                <a href="{{ route('students.edit', $student) }}" class="text-blue-500 hover:underline">Edit</a>
                <button class="text-red-500 ml-2 hover:underline" onclick="openModal({{ $student->id }})">
                    Delete
                </button>

                <!-- Hidden form for deletion -->
                <form id="delete-form-{{ $student->id }}" action="{{ route('students.destroy', $student) }}" method="POST" style="display:none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Delete Modal -->
<div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
        <h2 class="text-lg font-bold mb-4">Confirm Deletion</h2>
        <p class="mb-4">Are you sure you want to delete this student?</p>
        <div class="flex justify-end space-x-2">
            <button onclick="closeModal()" class="px-4 py-2 rounded bg-gray-300 hover:bg-gray-400">Cancel</button>
            <button id="confirmDeleteBtn" class="px-4 py-2 rounded bg-red-500 text-white hover:bg-red-600">Delete</button>
        </div>
    </div>
</div>

<!-- Scripts -->
<script>
let deleteFormId = null;

// Delete Modal Functions
function openModal(studentId) {
    deleteFormId = studentId;
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

// Table Sorting
const table = document.getElementById("studentsTable");
const tbody = table.tBodies[0];

function sortTableByColumn(colIndex, ascending=true) {
    const rows = Array.from(tbody.querySelectorAll("tr"));

    rows.sort((a, b) => {
        const aText = a.children[colIndex].textContent.trim().toLowerCase();
        const bText = b.children[colIndex].textContent.trim().toLowerCase();
        if(aText < bText) return ascending ? -1 : 1;
        if(aText > bText) return ascending ? 1 : -1;
        return 0;
    });

    rows.forEach(row => tbody.appendChild(row));
}

// Event listeners for sort buttons
document.getElementById('sortAsc').addEventListener('click', () => {
    const col = document.getElementById('sortColumn').value;
    sortTableByColumn(parseInt(col), true);
});

document.getElementById('sortDesc').addEventListener('click', () => {
    const col = document.getElementById('sortColumn').value;
    sortTableByColumn(parseInt(col), false);
});
</script>
@endsection
