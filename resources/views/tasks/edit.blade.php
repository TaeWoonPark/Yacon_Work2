@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: 'Hiragino Maru Gothic Pro', Arial, sans-serif;
            background-color: #F6FFF6;
        }

        .edit-container {
            width: 90%;
            max-width: 600px;
            margin: 60px auto 80px;
            background-color: #ffffff;
            border-radius: 25px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
        }

        .edit-container h1 {
            color: #2E8B57;
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: 1.5px solid #A7DCA8;
            border-radius: 10px;
            font-size: 15px;
            text-align: center;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        select:focus {
            border-color: #7CC47C;
            box-shadow: 0 0 6px #C8E6C9;
            outline: none;
        }

        button {
            margin-top: 25px;
            padding: 12px 25px;
            border: none;
            border-radius: 10px;
            background-color: #7CC47C;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #6BBF6B;
        }

        .cancel-btn {
            background-color: #F28B82;
            margin-left: 15px;
        }

        .cancel-btn:hover {
            background-color: #E57368;
        }

        footer {
            text-align: center;
            font-size: 13px;
            color: #666;
            margin-top: 40px;
            margin-bottom: 20px;
        }
    </style>

    <div class="edit-container">
        <h1>📝 作業編集</h1>

        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
            @csrf
            @method('PUT')

            <input type="text" name="name" value="{{ old('name', $task->name) }}" placeholder="作業名" required><br>

            <input type="text" name="staff" value="{{ old('staff', $task->staff) }}" placeholder="担当者"><br>

            <input type="date" name="date" value="{{ old('date', $task->date) }}" required><br>

            <select name="status" required>
                <option value="進行中" {{ old('status', $task->status) == '進行中' ? 'selected' : '' }}>進行中</option>
                <option value="完了" {{ old('status', $task->status) == '完了' ? 'selected' : '' }}>完了</option>
            </select><br>

            <button type="submit">更新</button>
            <a href="{{ route('dashboard') }}" class="cancel-btn">キャンセル</a>
        </form>
    </div>

    <footer>© 2025 Yacon Works</footer>
@endsection
