@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">

            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input type="text" class="form-control" name="todo" placeholder="Create a new todo">
            </form>

        </div>
    </div>

    <hr>

    @foreach($todos as $todo)
        {{ $todo->todo }} <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger">X</a>
        <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info btn-xs">Update</a>

        @if (!$todo->completed )
            <a href="{{ route('todos.completed', ['id' => $todo->id]) }}" class="btn btn-xs btn-success">Mark as Completed</a>

        @else
            <span class="text-completed">Completed!</span>

        @endif
        <hr>
    @endforeach
@stop

