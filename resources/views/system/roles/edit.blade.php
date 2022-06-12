@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-9">

            <div class="card">
                <h5 class="card-header">
                    Role Detail
                </h5>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">Name</label>
                        <div class="col-md-8">
                            <input type="text" name="" id="" class="form-control" value="{{ $role->name }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('roles.tasks.update', $role->id) }}" method="post">
                        @csrf
                        <div class="card">
                            <h5 class="card-header">
                                Tasks
                            </h5>
                            <div class="card-body">
                                @if (count($tasks) > 0)
                                    <ul>
                                        @foreach ($tasks->whereNull('task_id') as $task)
                                            <li><input type="checkbox" name="tasks[]" id="tasks" value="{{ $task->id }}"
                                                    @if (in_array($task->id, $role->tasks->pluck('task_id')->toArray())) checked @endif> {{ $task->name }}
                                            </li>
                                            @if (count($tasks->where('task_id', $task->id)) > 0)
                                                <ul>
                                                    @foreach ($tasks->where('task_id', $task->id) as $subtask)
                                                        <li><input type="checkbox" name="tasks[]" id="tasks"
                                                                value="{{ $subtask->id }}"
                                                                @if (in_array($subtask->id, $role->tasks->pluck('task_id')->toArray())) checked @endif>
                                                            {{ $subtask->name }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @endforeach
                                    </ul>
                                @else
                                    <span class="lead text-center">Any results found</span>
                                @endif
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    {{ $role->id }}
                </div>
                <div class="card-footer">
                    <a href="{{ route('roles.edit', $role->id) }}"
                        class="btn btn-primary float-left">@lang('crud.edit')</a>
                    <a href="{{ route('roles.destroy', $role->id) }}"
                        class="btn btn-danger float-right">@lang('crud.delete')</a>
                </div>
            </div>
        </div>
    </div>

@endsection
