@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: #FFF8F0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .auth-box {
            width: 360px;
            padding: 50px 30px;
            background-color: #A8E6CF;
            border-radius: 25px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .auth-box h1 {
            margin-bottom: 30px;
            color: #056608;
            font-size: 26px;
            font-weight: bold;
        }

        .auth-box input {
            width: 100%;
            padding: 16px;
            margin: 12px 0;
            border-radius: 12px;
            border: 2px solid #fff;
            font-size: 16px;
        }

        .auth-box button {
            width: 100%;
            padding: 16px;
            margin-top: 20px;
            background-color: #FFD3B6;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .auth-box button:hover {
            background-color: #FFAAA5;
        }

        .auth-box .link {
            margin-top: 15px;
            font-size: 14px;
        }
    </style>

    <div class="auth-box">
        <h1>アカウント登録</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input id="name" type="text" name="name" placeholder="お名前" required autofocus>
            @error('name')
                <span style="color:red">{{ $message }}</span>
            @enderror

            <input id="email" type="email" name="email" placeholder="メールアドレス" required>
            @error('email')
                <span style="color:red">{{ $message }}</span>
            @enderror

            <input id="password" type="password" name="password" placeholder="パスワード" required>
            @error('password')
                <span style="color:red">{{ $message }}</span>
            @enderror

            <input id="password_confirmation" type="password" name="password_confirmation" placeholder="パスワード（確認）" required>

            <button type="submit">登録</button>
        </form>

        <div class="link">
            <a href="{{ route('login') }}">ログインはこちら</a>
        </div>
    </div>
@endsection
