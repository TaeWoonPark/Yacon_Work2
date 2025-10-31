@extends('layouts.app')

@section('content')
    <h2>📝 加工作業 記録入力フォーム</h2>

    <form action="{{ route('work_records.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>日付</label>
        <input type="date" name="date" value="{{ old('date', date('Y-m-d')) }}">

        <label>作業内容</label>
        <input type="text" name="content" value="{{ old('content') }}" placeholder="例：スライス乾燥">

        <label>作業人数</label>
        <input type="number" name="workers" value="{{ old('workers') }}" min="1" placeholder="例：3">

        <label>作業時間（時間）</label>
        <input type="number" step="0.1" name="work_time" value="{{ old('work_time') }}" placeholder="例：5.5">

        <label>加工前重量（kg）</label>
        <input type="number" step="0.1" name="weight_before" value="{{ old('weight_before') }}" placeholder="例：25.0">

        <label>加工後重量（kg）</label>
        <input type="number" step="0.1" name="weight_after" value="{{ old('weight_after') }}" placeholder="例：20.5">

        <label>備考</label>
        <textarea name="remarks" placeholder="自由記入">{{ old('remarks') }}</textarea>

        <label>加工前写真</label>
        <input type="file" name="photo_before">

        <label>加工後写真</label>
        <input type="file" name="photo_after">

        <button type="submit">登録する</button>
    </form>
@endsection
