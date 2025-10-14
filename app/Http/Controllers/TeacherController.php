<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Teacher;
use Illuminate\View\View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View         
    {
        $teachers= Teacher::all();
        return view('teacher.index')->with('teachers',$teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Teacher::create($input);
        return redirect('teachers')->with('flash_message', 'Teacher Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $teacher = Teacher::find($id);
        return view('teacher.show')->with('teacher', $teacher);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $teacher = Teacher::find($id);
        return view('teacher.edit')->with('teacher', $teacher);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email,'.$id,
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update($validated);

        return redirect('teachers')->with('flash_message', 'Teacher updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Teacher::destroy($id);
        return redirect('teachers')->with('flash_message', 'Teacher deleted!');
    }
}
