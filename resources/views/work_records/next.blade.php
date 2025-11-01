@extends('layouts.app')

@section('content')
    <div class="mt-6 bg-white p-6 rounded-lg shadow">

        <h2 class="text-xl font-bold mb-4">📄 次のページ</h2>

        <p class="mb-4 text-gray-700">
            このページでは追加情報や作業の補足説明を表示できます。
            必要に応じてここに操作ボタンやリンクを配置してください。
        </p>

        <div class="space-x-2">
            <a href="{{ route('dashboard') }}"
                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">戻る</a>
        </div>

        <!-- フッター -->
        <div class="text-center text-gray-500 mt-6 mb-6">
            YACON WORKS ◯◯◯
        </div>
    </div>
@endsection
