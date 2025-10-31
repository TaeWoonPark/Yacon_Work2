<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Yacon Works ログイン</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            font-family: "Noto Sans JP", sans-serif;
            background-color: #f7f7f7;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .login-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            width: 340px;
            padding: 24px;
            text-align: center;
        }
        h1 {
            font-size: 20px;
            margin-bottom: 16px;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
        }
        button:hover {
            background-color: #0069d9;
        }
        .error {
            color: red;
            font-size: 13px;
            margin-top: 5px;
        }
        .footer {
            margin-top: 12px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h1>Yacon Works（ヤーコンワークス）</h1>

    @if ($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}" required>
        <input type="password" name="password" placeholder="パスワード" required>
        <button type="submit">ログイン</button>
    </form>

    <div class="footer">（管理者・作業所 共通ログイン）</div>
</div>

</body>
</html>
