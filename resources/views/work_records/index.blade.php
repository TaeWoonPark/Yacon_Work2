<x-layouts.app>
    <h1 class="text-3xl font-bold mb-6 text-primary">作業履歴</h1>

    <table class="table-auto border-collapse border border-gray-300 w-full max-w-3xl">
        <thead class="bg-purple-200">
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">作業名</th>
                <th class="border px-4 py-2">担当者</th>
                <th class="border px-4 py-2">期限</th>
                <th class="border px-4 py-2">状態</th>
                <th class="border px-4 py-2">作成日</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr class="text-center">
                    <td class="border px-4 py-2">{{ $task->id }}</td>
                    <td class="border px-4 py-2">{{ $task->name }}</td>
                    <td class="border px-4 py-2">{{ $task->assignee }}</td>
                    <td class="border px-4 py-2">{{ $task->deadline }}</td>
                    <td class="border px-4 py-2">{{ $task->status }}</td>
                    <td class="border px-4 py-2">{{ $task->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-6">
        <a href="{{ route('dashboard') }}" class="bg-primary text-white px-4 py-2 rounded hover:bg-purple-700">ダッシュボードに戻る</a>
    </div>
</x-layouts.app>
