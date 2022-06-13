@extends('app')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="" class="mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-default">@lang('crud.search')</button>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('users.create') }}" class="btn btn-success float-right">@lang('crud.new')</a>
                    </div>
                </div>
            </form>
            <table class="table table-bordered table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>Role</th>
                        <th>User</th>
                        <th>Object</th>
                        <th>Run</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($securities as $security)
                        <tr>
                            <td>{{ $security->role->name ?? '*PUBLIC' }}</td>
                            <td>{{ $security->user->user ?? '*PUBLIC' }}</td>
                            <td>{{ $security->object_name }}</td>
                            <td>{{ $security->run_application }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
@endsection
