<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect()->route('dashboard');
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'assignee' => 'required|string|max:255',
            'deadline' => 'nullable|date',
            'status' => 'required|in:未着手,進行中,完了'
        ]);

        Task::create($validated);
        return redirect()->route('tasks.index')->with('success', '作業を追加しました');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'assignee' => 'required|string|max:255',
            'deadline' => 'nullable|date',
            'status' => 'required|in:未着手,進行中,完了'
        ]);

        $task->update($validated);
        return redirect()->route('tasks.index')->with('success', '作業を更新しました');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', '作業を削除しました');
    }
}
