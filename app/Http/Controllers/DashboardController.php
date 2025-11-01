<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkRecord;

class DashboardController extends Controller
{
    public function index()
    {
        $work_records = WorkRecord::latest()->take(5)->get();
        return view('dashboard', compact('work_records'));
    }
}
