 TPS App

Description / Overview

TPS App is a Laravel-based web application designed to manage student records. This system allows users to add, view, edit, and delete student information through a simple and intuitive interface. The application serves as a practical example of basic CRUD (Create, Read, Update, Delete) operations in Laravel.

Goals & Objectives

Learn how to implement CRUD functionality using Laravel.

Understand routing, controllers, and views in Laravel.

Practice database management and migrations with MySQL.

Gain experience in building user-friendly web interfaces.

Apply basic validation for form inputs in Laravel.

🚀 Features / Functionality

Add Students: Input student details and save them to the database.

View Students: List all students in a tabular format with their details.

Edit Students: Update existing student records.

Delete Students: Remove students from the system.

🛠️ Installation Instructions

Clone the repository and navigate into the directory:

git clone [https://github.com/burniku/tpsApp](https://github.com/burniku/tpsApp)
cd tpsApp


Install PHP dependencies:

composer install


Run migrations (to create the database tables):

php artisan migrate


Start the development server:

php artisan serve


Open the application:
Go to http://127.0.0.1:8000 to start using TPS App.

💡 Usage

Use the navigation menu to Add a Student by entering details like name, email, and other relevant information.

View the list of students on the main page.

Use the Edit button to modify student details.

Use the Delete button to remove a student from the system.

💻 Example Code Snippets

Web Route (routes/web.php):

Route::resource('students', StudentController::class);


View Rendering and Actions (resources/views/students/index.blade.php):

@foreach($students as $student)
<tr>
    <td>{{ $student->name }}</td>
    <td>{{ $student->email }}</td>
    <td>
        <a href="{{ route('students.edit', $student->id) }}">Edit</a>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach


🖼️ Screenshots

👤 Contributors

Jan Yuri Reyes

© License

This project is licensed under the MIT License.
