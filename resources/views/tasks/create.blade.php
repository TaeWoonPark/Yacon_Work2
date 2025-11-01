<x-layouts.app>
    <h1 class="text-2xl font-bold mb-4">作業登録</h1>

    <form action="{{ route('tasks.store') }}" method="POST" class="bg-white shadow rounded-lg p-4">
        @csrf
        <div class="mb-4">
            <label class="block mb-1">作業名</label>
            <input type="text" name="name" class="w-full border px-2 py-1 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1">担当者</label>
            <input type="text" name="assignee" class="w-full border px-2 py-1 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1">期限</label>
            <input type="date" name="deadline" class="w-full border px-2 py-1 rounded">
        </div>
        <div class="mb-4">
            <label class="block mb-1">状態</label>
            <select name="status" class="w-full border px-2 py-1 rounded" required>
                <option value="未着手">未着手</option>
                <option value="進行中">進行中</option>
                <option value="完了">完了</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">追加</button>
    </form>
</x-layouts.app>
