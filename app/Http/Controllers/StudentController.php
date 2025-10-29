<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Section;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // display students in welcome.blade.php
    public function index()
    {
        $students = Student::with('section')->get();
        return view('students.index', compact('students'));
    }

    // show create form
    public function create()
    {
        $sections = Section::all();
        return view('students.create', compact('sections'));
    }

    // store new student
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required',
            'email'      => 'required|email|unique:students',
            'section_id' => 'required'
        ]);

        Student::create($request->all());

        return redirect('/students')->with('success', 'Student created!');
    }

    // show edit form
    public function edit(Student $student)
    {
        $sections = Section::all();
        return view('students.edit', compact('student', 'sections'));
    }

    // update student
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name'       => 'required',
            'email'      => 'required|email|unique:students,email,' . $student->id,
            'section_id' => 'required'
        ]);

        $student->update($request->all());

        return redirect('/students')->with('success update', 'Student updated!');
    }

    // delete student
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/students')->with('success delete', 'Student deleted!');
    }
}
