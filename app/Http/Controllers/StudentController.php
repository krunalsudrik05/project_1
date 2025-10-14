<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Student;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students = Student::all();
        return view('student.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Student::create($input);
        return redirect('students')->with('flash_message', 'Student Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $student = Student::findOrFail($id);
        return view('student.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $student = Student::findOrFail($id);
        return view('student.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
{
    // ✅ Validate all fields
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email,' . $id,
        'phone' => 'required|string|max:15',
        'address' => 'required|string|max:255',
    ]);

    // ✅ Find and update student
    $student = Student::findOrFail($id);
    $student->update($validated);

    // ✅ Redirect with success message
    return redirect('students')->with('flash_message', 'Student updated!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('students')->with('flash_message', 'Student deleted!');
    }
}
