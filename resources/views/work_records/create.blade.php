@extends('layouts.app')

@section('content')
    <div class="mt-6 bg-white p-6 rounded-lg shadow max-w-lg mx-auto">

        <h2 class="text-xl font-bold mb-4">➕ 作業登録</h2>

        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('work_records.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block mb-1 font-bold">日付</label>
                <input type="date" name="date" value="{{ old('date') }}" class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="block mb-1 font-bold">作業内容</label>
                <input type="text" name="content" value="{{ old('content') }}" class="w-full border rounded px-3 py-2"
                    placeholder="例：スライス乾燥">
            </div>

            <div>
                <label class="block mb-1 font-bold">加工量 (kg)</label>
                <input type="number" step="0.01" name="quantity" value="{{ old('quantity') }}"
                    class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="block mb-1 font-bold">歩留まり (%)</label>
                <input type="number" step="0.01" name="yield" value="{{ old('yield') }}"
                    class="w-full border rounded px-3 py-2">
            </div>

            <div class="flex justify-between items-center mt-4">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">作業を追加</button>
                <a href="{{ route('work_records.index') }}"
                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">戻る</a>
            </div>
        </form>

        <!-- フッター -->
        <div class="text-center text-gray-500 mt-6 mb-6">
            YACON WORKS ◯◯◯
        </div>
    </div>
@endsection
