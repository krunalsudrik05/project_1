<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Course;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches=Batch::all();
        return view('batche.index',compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses=Course::pluck('course_name','id');
        return view('batche.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'course_id' => 'required',
            'start_date' => 'required|date',
        ]);

        Batch::create($validated);

        return redirect('batches')->with('flash_message', 'Batch Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $batch=Batch::find($id);
        return view('batche.show',compact('batch'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batch=Batch::find($id);
        $courses=Course::pluck('course_name','id');
        return view('batche.edit',compact('batch','courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $batch=Batch::find($id);
        $input=$request->all();
        $batch->update($input);
        return redirect('batches')->with('flash_message','Batch Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Batch::destroy($id);
        return redirect('batches')->with('flash_message','Batch deleted!');
    }
}
