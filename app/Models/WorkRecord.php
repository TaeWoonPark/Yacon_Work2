<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkRecord extends Model
{
    use HasFactory;

    // 登録可能なカラム
    protected $fillable = [
        'date',
        'content',
        'workers',
        'work_time',
        'weight_before',
        'weight_after',
        'remarks',
        'photo_before',
        'photo_after',
    ];

    public function index()
    {
        $records = \App\Models\WorkRecord::orderBy('date', 'desc')->get();

        return view('work_records.index', compact('records'));
    }

    // 歩留まり率（加工後÷加工前×100）
    public function getYieldRateAttribute()
    {
        if ($this->weight_before > 0) {
            return round(($this->weight_after / $this->weight_before) * 100, 1);
        }
        return 0;
    }

    // 1人当たり作業効率（加工後÷人数÷時間）
    public function getEfficiencyAttribute()
    {
        if ($this->workers > 0 && $this->work_time > 0) {
            return round($this->weight_after / $this->workers / $this->work_time, 2);
        }
        return 0;
    }
}
