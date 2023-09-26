<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taakmodel; 


class taakcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Taakmodel::all();
        return view('index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $task = Taakmodel::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'completed' => false, 
        ]);

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $task = Taakmodel::findOrFail($id);
    return view('show', compact('task'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $task = Taakmodel::findOrFail($id);
        return view('edit', compact('task'));
    }   
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'completed' => 'boolean',
        ]);
    
        $task = Taakmodel::findOrFail($id);
        $task->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'completed' => $request->has('completed'),
        ]);
    
        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task = Taakmodel::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index');
    }
    public function toggle($id)
{
    $task = Taakmodel::findOrFail($id);
    $task->update([
        'completed' => !$task->completed,
    ]);

    return redirect()->route('tasks.index');
}
}
