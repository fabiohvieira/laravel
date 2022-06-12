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
                        <a href="{{ route('roles.create') }}" class="btn btn-success float-right">@lang('crud.new')</a>
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
                    @foreach ($roles as $role)
                        <tr>
                            <td class="text-center">{{ $role->id }}</td>
                            <td><a href="{{ route('roles.show', $role->id) }}">{{ $role->name }}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>

    </div>
    
@endsection
