@extends('layouts.app')

@section('content')
    <h2>作業記録一覧</h2>

    <table border="1">
        <tr>
            <th>日付</th>
            <th>作業内容</th>
            <th>作業人数</th>
            <th>作業時間</th>
            <th>加工前重量</th>
            <th>加工後重量</th>
            <th>備考</th>
        </tr>
        @foreach ($records as $r)
            <tr>
                <td>{{ $r->date }}</td>
                <td>{{ $r->content }}</td>
                <td>{{ $r->workers }}</td>
                <td>{{ $r->work_time }}</td>
                <td>{{ $r->weight_before }}</td>
                <td>{{ $r->weight_after }}</td>
                <td>{{ $r->remarks }}</td>
            </tr>
        @endforeach
    </table>
@endsection
