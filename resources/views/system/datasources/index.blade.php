@extends('app')

@section('content')
    
    <div class="card">
        <div class="card-body">
            <a href="{{ route('datasources.create') }}" class="btn btn-primary float-right">@lang('crud.new')</a>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Name</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datasources as $datasource)
                        <tr>
                            <td class="text-center">{{ $datasource->id }}</td>
                            <td>{{ $datasource->name }}</td>
                            <td>{{ $datasource->type }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>

            <div class="pull-center">{{ $datasources->links() }}</div>
        </div>
    </div>

@endsection
