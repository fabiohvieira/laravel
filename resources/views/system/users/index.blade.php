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
                        <th width="10%">ID</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="text-center">{{ $user->id }}</td>
                            <td><a href="{{ route('users.show', $user->id) }}">{{ $user->user }}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
    
@endsection
