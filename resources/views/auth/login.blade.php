<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(180deg, #E9FBE9 0%, #F9FFF9 100%);
            font-family: 'Hiragino Maru Gothic Pro', 'Arial Rounded MT Bold', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .login-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .login-container {
            background-color: #fff;
            border-radius: 25px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 50px 60px 70px;
            text-align: center;
            width: 90%;
            max-width: 420px;
        }

        h1 {
            color: #2E8B57;
            margin-bottom: 30px;
            font-size: 26px;
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: 85%;
            padding: 12px;
            margin: 10px 0;
            border: 1.5px solid #A7DCA8;
            border-radius: 10px;
            outline: none;
            text-align: center;
            font-size: 15px;
            transition: 0.2s;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #7CC47C;
            box-shadow: 0 0 6px #C8E6C9;
        }

        button {
            width: 90%;
            padding: 12px;
            margin-top: 25px;
            border: none;
            background-color: #7CC47C;
            color: white;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #6BBF6B;
        }

        .register-link {
            margin-top: 40px;
            font-size: 14px;
            color: #333;
        }

        .register-link a {
            color: #2E8B57;
            text-decoration: none;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        footer {
            width: 100%;
            text-align: center;
            color: #666;
            font-size: 13px;
            margin-top: 40px;
            padding-bottom: 15px;
        }

        /* スマホ対策 */
        @media screen and (max-width: 480px) {
            .login-container {
                padding: 40px 30px 60px;
            }

            h1 {
                font-size: 22px;
            }

            input[type="email"],
            input[type="password"] {
                width: 90%;
            }

            button {
                width: 95%;
            }
        }
    </style>
</head>

<body>
    <div class="login-wrapper">
        <div class="login-container">
            <h1>🌿 Yacon Works </h1>

            @if (session('error'))
                <p style="color:red;">{{ session('error') }}</p>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" placeholder="メールアドレス" required><br>
                <input type="password" name="password" placeholder="パスワード" required><br>
                <button type="submit">ログイン</button>
            </form>

            <div class="register-link">
                <p>まだアカウントがありませんか？<br>
                    <a href="{{ route('register') }}">新規登録はこちら</a>
                </p>
            </div>
    <footer>
        © 2025 YACON_WORKS
    </footer>
</body>

</html>
