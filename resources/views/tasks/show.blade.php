@extends('layouts.app')

@section('content')


    <h1>タスクNo{{ $task->id }}の詳細</h1>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>内容</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'タスク編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection