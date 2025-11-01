<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkRecord;
use Illuminate\Support\Str;

class WorkRecordController extends Controller
{
    public function index()
    {
        $work_records = WorkRecord::latest()->get();
        return view('work_records.index', compact('work_records'));
    }

    public function create()
    {
        return view('work_records.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'content' => 'required|string',
            'quantity' => 'required|numeric',
            'yield' => 'required|numeric',
        ]);

        WorkRecord::create($request->all());
        return redirect()->route('work_records.index')->with('success', '作業を追加しました');
    }

    public function pdf($id)
    {
        $record = WorkRecord::findOrFail($id);
        return "PDF出力機能は未実装です";
    }

    public function share($id)
    {
        $record = WorkRecord::findOrFail($id);
        $record->share_token = Str::random(16);
        $record->save();
        $url = route('work_records.shared', $record->share_token);
        return redirect()->back()->with('success', "共有リンク生成: $url");
    }

    public function sharedView($token)
    {
        $record = WorkRecord::where('share_token', $token)->firstOrFail();
        return view('work_records.shared', compact('record'));
    }

    public function sharedPdf($token)
    {
        $record = WorkRecord::where('share_token', $token)->firstOrFail();
        return "共有PDF機能は未実装です";
    }
}
