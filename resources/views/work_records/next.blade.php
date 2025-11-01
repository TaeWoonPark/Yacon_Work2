@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-lg">

        <!-- タイトル -->
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-8">📋 次のステップ</h1>

        <!-- 概要説明 -->
        <p class="text-center text-gray-600 mb-8">
            ここでは、次に進む操作を選択できます。<br>
            下記の表から行きたいページを選んでください。
        </p>

        <!-- 表形式メニュー -->
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-blue-100 text-blue-800 font-semibold">
                    <th class="border border-gray-300 p-3">操作内容</th>
                    <th class="border border-gray-300 p-3">説明</th>
                    <th class="border border-gray-300 p-3">移動</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-blue-50">
                    <td class="border border-gray-300 p-3 font-bold">📊 ダッシュボード</td>
                    <td class="border border-gray-300 p-3 text-gray-600">現在の作業状況や最新情報を確認します。</td>
                    <td class="border border-gray-300 p-3 text-center">
                        <a href="{{ route('dashboard') }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                            戻る
                        </a>
                    </td>
                </tr>

                <tr class="hover:bg-green-50">
                    <td class="border border-gray-300 p-3 font-bold">🗂️ 作業一覧</td>
                    <td class="border border-gray-300 p-3 text-gray-600">登録されたすべての作業記録を一覧で表示します。</td>
                    <td class="border border-gray-300 p-3 text-center">
                        <a href="{{ route('work_records.index') }}"
                            class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded">
                            開く
                        </a>
                    </td>
                </tr>

                <tr class="hover:bg-yellow-50">
                    <td class="border border-gray-300 p-3 font-bold">✏️ 新しい作業登録</td>
                    <td class="border border-gray-300 p-3 text-gray-600">新しい加工作業を登録します。</td>
                    <td class="border border-gray-300 p-3 text-center">
                        <a href="{{ route('work_records.create') }}"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded">
                            登録
                        </a>
                    </td>
                </tr>

                <tr class="hover:bg-red-50">
                    <td class="border border-gray-300 p-3 font-bold">🚪 ログアウト</td>
                    <td class="border border-gray-300 p-3 text-gray-600">システムから安全にログアウトします。</td>
                    <td class="border border-gray-300 p-3 text-center">
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">
                                ログアウト
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- フッター -->
        <div class="text-center text-gray-500 text-sm mt-8">
            © 2025 YACON WORKS | 福祉作業所成果共有システム
        </div>
    </div>
@endsection
