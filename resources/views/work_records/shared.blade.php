@extends('layouts.app')

@section('content')
    <div class="mt-6 bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-bold mb-4">📊 今月の加工実績</h2>
        <div class="grid grid-cols-2 gap-4 mb-6">
            <div class="bg-blue-50 p-4 rounded text-center">
                <div>加工総量</div>
                <div class="text-lg font-bold">125.4 kg</div>
            </div>
            <div class="bg-blue-50 p-4 rounded text-center">
                <div>平均歩留まり</div>
                <div class="text-lg font-bold">82.3%</div>
            </div>
            <div class="bg-blue-50 p-4 rounded text-center">
                <div>作業者人数</div>
                <div class="text-lg font-bold">12 名</div>
            </div>
            <div class="bg-blue-50 p-4 rounded text-center">
                <div>総作業時間</div>
                <div class="text-lg font-bold">45.5 時間</div>
            </div>
        </div>

        <h2 class="text-xl font-bold mb-4">📅 最新の作業記録</h2>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 p-2">日付</th>
                    <th class="border border-gray-300 p-2">内容</th>
                    <th class="border border-gray-300 p-2">加工量</th>
                    <th class="border border-gray-300 p-2">歩留まり</th>
                    <th class="border border-gray-300 p-2">操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($work_records as $record)
                    <tr>
                        <td class="border border-gray-300 p-2">{{ $record->date->format('Y-m-d') }}</td>
                        <td class="border border-gray-300 p-2">{{ $record->content }}</td>
                        <td class="border border-gray-300 p-2">{{ $record->quantity }} kg</td>
                        <td class="border border-gray-300 p-2">{{ $record->yield }}%</td>
                        <td class="border border-gray-300 p-2">
                            <a href="{{ route('work_records.pdf', $record->id) }}"
                                class="bg-gray-500 hover:bg-gray-700 text-white py-1 px-2 rounded">PDF</a>
                            <a href="{{ route('work_records.share', $record->id) }}"
                                class="bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-2 rounded">共有</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-6 text-center space-x-4">
            <a href="{{ route('work_records.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">作業を追加</a>
            <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">今月のレポートを作成（PDF）</button>
        </div>
    </div>
@endsection
