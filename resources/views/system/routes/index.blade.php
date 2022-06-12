@extends('app')

@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="3%">ID</th>
                        <th width="10%">Type</th>
                        <th>URI</th>
                        <th>Controller</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($routes as $route)
                        <tr>
                            <td>{{ $route->id }}</td>
                            <td class="text-center">
                                @switch($route->type)
                                    @case('get')
                                        <span class="text-green"><i class="fa fa-link"></i> {{$route->type}}</span>
                                        @break
                                    @case('resource')
                                        <span class="text-info"><i class="fa fa-database"></i> {{$route->type}}</span>
                                        @break
                                
                                    @default
                                        
                                @endswitch
                            </td>
                            <td><a href="/routes/{{ $route->id }}">{{ $route->uri }}</a></td>
                            <td>{{ $route->controller }}</td>
                            <td>{{ $route->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>

            <div class="pull-center">{{ $routes->links() }}</div>
        </div>
    </div>
@endsection
