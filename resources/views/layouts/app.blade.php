<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Yacon Works</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- 上部ナビ -->
    <div class="bg-white shadow p-4 flex justify-between items-center flex-wrap">
        <div>
            @auth
                ようこそ、{{ Auth::user()->name }} さん
            @endauth
        </div>
        <div class="space-x-2 mt-2 sm:mt-0">
            @auth
                <a href="{{ route('dashboard') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">ダッシュボード</a>
                <a href="{{ route('next') }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">次のページ</a>
                <a href="{{ route('work_records.index') }}"
                    class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">作業一覧</a>
                <a href="{{ route('work_records.create') }}"
                    class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">作業登録</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">ログアウト</button>
                </form>
            @endauth
        </div>
    </div>

    <!-- メインコンテンツ -->
    <div class="container mx-auto mt-6">
        @yield('content')
    </div>

</body>

</html>
