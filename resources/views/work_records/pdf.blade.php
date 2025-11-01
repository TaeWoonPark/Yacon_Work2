<!DOCTYPE html>
<html lang="ja">

<a href="{{ route('next') }}" class="btn btn-primary">
    次のページへ
</a>

<head>
    <meta charset="UTF-8">
    <title>作業記録 #{{ $record->id }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
        }

        h1,
        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>

<body>
    <h1>作業記録</h1>
    <h2>#{{ $record->id }}</h2>

    <table>
        <tr>
            <th>日付</th>
            <td>{{ $record->date }}</td>
        </tr>
        <tr>
            <th>内容</th>
            <td>{{ $record->content }}</td>
        </tr>
        <tr>
            <th>作業人数</th>
            <td>{{ $record->staff_count }}</td>
        </tr>
        <tr>
            <th>作業時間（h）</th>
            <td>{{ $record->hours }}</td>
        </tr>
        <tr>
            <th>作業前重量</th>
            <td>{{ $record->before_weight }}</td>
        </tr>
        <tr>
            <th>作業後重量</th>
            <td>{{ $record->after_weight }}</td>
        </tr>
        <tr>
            <th>歩留まり率（%）</th>
            <td>{{ $record->yield_rate }}</td>
        </tr>
        <tr>
            <th>1人あたり効率</th>
            <td>{{ $record->efficiency_per_person }}</td>
        </tr>
        @if (!empty($record->remarks))
            <tr>
                <th>備考</th>
                <td>{{ $record->remarks }}</td>
            </tr>
        @endif
    </table>

    @if (!empty($record->before_photo_path))
        <h3>作業前写真</h3>
        <img src="{{ storage_path('app/public/' . $record->before_photo_path) }}" style="max-width:100%;">
    @endif

    @if (!empty($record->after_photo_path))
        <h3>作業後写真</h3>
        <img src="{{ storage_path('app/public/' . $record->after_photo_path) }}" style="max-width:100%;">
    @endif

    <div class="footer">
        PDF生成日: {{ now()->format('Y-m-d H:i') }}
    </div>
</body>

</html>
