<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>作業記録システム</title>
</head>

<body>
    <header>
        <h1>作業記録システム</h1>
        <nav>
            <a href="{{ route('work_records.index') }}">一覧</a>
            <a href="{{ route('work_records.create') }}">新規登録</a>
        </nav>
        <hr>
    </header>

    <main>
        @if (session('success'))
            <p style="color:green">{{ session('success') }}</p>
        @endif

        @yield('content')
    </main>
</body>

</html>
