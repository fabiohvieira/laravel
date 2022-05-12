@extends('app')

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Last Access</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td><a href="/tasks/{{ $task->id }}">{{ $task->name }}</a></td>
                            <td>{{$task->controller}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>

            <div class="pull-center">{{ $tasks->links() }}</div>
        </div>
    </div>
@endsection
