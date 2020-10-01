@extends('layouts.app')

@section('content')
    
    @if (Auth::check())
        <h1>{{ $user->name }} のタスク一覧</h1>
        @if (count($tasks) > 0)
        
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>タスク</th>
                        <th>ステータス</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        
        <div class="mt-3">
            {{ $tasks->links() }}
        </div>  
        
        {!! link_to_route('tasks.create', '新規タスク追加', [], ['class' => 'btn btn-primary']) !!}
    
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Tasklist</h1>
                {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    
    @endif
    
@endsection