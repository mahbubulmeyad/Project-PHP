<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $posts = Task::all(); // Fetch all tasks from the database
        return view('todo', compact('posts')); // Pass tasks to the view
    }

    public function create()
    {
        return view('create-post');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    public function show($id)
    {
        try {
            $post = Task::findOrFail($id);
            return view('show-post', compact('post'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return view('common.error', ['message' => 'Post not found.']);
        }
    }
}
