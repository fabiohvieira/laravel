@extends('app')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="" class="mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="" id="" class="form-control input-lg">
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-default btn-lg">@lang('crud.search')</button>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('addressbook.create') }}" class="btn btn-success btn-lg float-right">@lang('crud.new')</a>
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
                    @foreach ($addressbook as $ab)
                        <tr>
                            <td class="text-center">{{ $ab->id }}</td>
                            <td><a href="{{ route('users.show', $ab->id) }}">{{ $ab->name }}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <div class="text-center">
                {{ $addressbook->links() }}
            </div>
        </div>

    </div>
    
@endsection
