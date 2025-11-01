@extends('layouts.app')

@section('content')
    <div class="mt-6 bg-white p-6 rounded-lg shadow">

        <h2 class="text-xl font-bold mb-4">📅 最新の作業記録</h2>

        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 p-2">日付</th>
                    <th class="border border-gray-300 p-2">内容</th>
                    <th class="border border-gray-300 p-2">加工量</th>
                    <th class="border border-gray-300 p-2">歩留まり</th>
                </tr>
            </thead>
            <tbody>
                @forelse($work_records as $record)
                    <tr>
                        <td class="border border-gray-300 p-2">{{ $record->date->format('Y-m-d') }}</td>
                        <td class="border border-gray-300 p-2">{{ $record->content }}</td>
                        <td class="border border-gray-300 p-2">{{ $record->quantity }} kg</td>
                        <td class="border border-gray-300 p-2">{{ $record->yield }}%</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="border border-gray-300 p-2 text-center text-gray-500">作業記録はありません</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
@endsection
