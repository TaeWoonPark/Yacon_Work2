<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkRecord;

class WorkRecordController extends Controller
{
    // 入力フォーム
    public function create()
    {
        $this->authorize('create', WorkRecord::class);
        return view('work_records.create');
    }

    // 保存
    public function store(Request $request)
    {
        $this->authorize('create', WorkRecord::class);

        $data = $request->validate([
            'date' => 'required|date',
            'content' => 'required|string|max:255',
            'workers' => 'required|integer|min:1',
            'work_time' => 'required|numeric|min:0',
            'weight_before' => 'required|numeric|min:0',
            'weight_after' => 'required|numeric|min:0',
            'remarks' => 'nullable|string',
            'photo_before' => 'nullable|image',
            'photo_after' => 'nullable|image',
        ]);

        // 画像保存
        if ($request->hasFile('photo_before')) {
            $data['photo_before'] = $request->file('photo_before')->store('photos');
        }
        if ($request->hasFile('photo_after')) {
            $data['photo_after'] = $request->file('photo_after')->store('photos');
        }

        WorkRecord::create($data);

        return redirect()->route('work_records.index')->with('success', '作業記録を登録しました。');
    }

    // 一覧
    public function index()
    {
        $records = WorkRecord::orderBy('date', 'desc')->get();
        return view('work_records.index', compact('records'));
    }
}
