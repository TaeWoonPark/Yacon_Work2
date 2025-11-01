<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class WorkRecordsController extends Controller
{
    public function index()
    {
        // 作業履歴を取得（全タスク、完了したものだけでも可）
        $tasks = Task::orderBy('updated_at', 'desc')->get();
        return view('work_records.index', compact('tasks'));
    }
}
