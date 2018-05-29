@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->

    <h1>id = {{ $tasklist->id }} のタスク詳細ページ</h1>
　　
　　 <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasklist->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $tasklist->status }}</td>
        </tr>
        <tr>
            <th>タスクリスト</th>
            <td>{{ $tasklist->content }}</td>
        </tr>
    </table>
         {!! link_to_route('tasklists.edit', 'このタスクリストを編集', ['id' => $tasklist->id], ['class' => 'btn btn-default']) !!}
    
        {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-warning']) !!}
    {!! Form::close() !!}
    

     
@endsection