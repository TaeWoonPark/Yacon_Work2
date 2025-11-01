@extends('layouts.app')

@section('title', '作業履歴')

@section('content')
    <h1 class="text-5xl font-bold mb-6 text-green-800 text-center">作業履歴</h1>

    <table class="border-collapse border border-green-500 w-96 text-center mb-6 mx-auto">
        <tr class="bg-green-200">
            <th class="border border-green-500 p-3">ID</th>
            <th class="border border-green-500 p-3">作業名</th>
            <th class="border border-green-500 p-3">担当</th>
            <th class="border border-green-500 p-3">期限</th>
            <th class="border border-green-500 p-3">状態</th>
        </tr>
        @foreach ($tasks as $task)
            <tr class="hover:bg-green-100">
                <td class="border border-green-500 p-3">{{ $task->id }}</td>
                <td class="border border-green-500 p-3">{{ $task->name }}</td>
                <td class="border border-green-500 p-3">{{ $task->assignee }}</td>
                <td class="border border-green-500 p-3">{{ $task->deadline }}</td>
                <td class="border border-green-500 p-3">{{ $task->status }}</td>
            </tr>
        @endforeach
    </table>

    <a href="{{ route('dashboard') }}"
        class="bg-green-500 text-white py-3 px-8 rounded hover:bg-green-600 font-bold text-xl block text-center mx-auto">ダッシュボードに戻る</a>
@endsection
