@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: #F6FFF6;
            font-family: 'Hiragino Maru Gothic Pro', 'Arial Rounded MT Bold', sans-serif;
            margin: 0;
        }

        .dashboard-container {
            width: 90%;
            max-width: 1000px;
            margin: 60px auto 80px;
            background-color: #ffffff;
            border-radius: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
        }

        .dashboard-title {
            font-size: 26px;
            color: #2E8B57;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .table-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        table {
            width: 95%;
            border-collapse: collapse;
            background-color: #FAFFFA;
            border-radius: 15px;
            overflow: hidden;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #E5E5E5;
            text-align: center;
        }

        th {
            background-color: #E6F5E6;
            color: #276749;
        }

        tr:hover {
            background-color: #F1FFF1;
        }

        .btn {
            background-color: #A7DCA8;
            color: #fff;
            padding: 8px 16px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #86C38E;
        }

        footer {
            text-align: center;
            color: #666;
            font-size: 13px;
            margin-bottom: 20px;
            margin-top: 60px;
        }
    </style>

    <div class="dashboard-container">
        <h1 class="dashboard-title">🌿 作業履歴</h1>

        <div style="margin-bottom: 20px;">
            <a href="{{ url('/tasks/create') }}" class="btn">＋ 作業を追加</a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>作業名</th>
                        <th>担当者</th>
                        <th>日付</th>
                        <th>状態</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($tasks) && count($tasks) > 0)
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->id }}</td>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->staff ?? '未設定' }}</td>
                                <td>{{ $task->date ?? '—' }}</td>
                                <td>{{ $task->status ?? '—' }}</td>
                                <td>
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn">編集</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>1</td>
                            <td>ヤーコン収穫準備</td>
                            <td>佐藤</td>
                            <td>2025-11-02</td>
                            <td>進行中</td>
                            <td><button class="btn">編集</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>出荷箱整理</td>
                            <td>高橋</td>
                            <td>2025-11-01</td>
                            <td>完了</td>
                            <td><button class="btn">編集</button></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <footer>© 2025 Yacon Works</footer>
@endsection
