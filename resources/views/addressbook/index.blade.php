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
            <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-light">
                    <tr>
                        @foreach ($addressbook[0]->toArray() as $key => $value)
                            <th>@lang('addressbook.' . $key)</th>
                        @endforeach 
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($addressbook as $ab)
                    <tr>
                        @foreach ($ab->toArray() as $key => $value)
                            <td>{{$value}}</td>
                        @endforeach
                        <td>
                            <button class="btn btn-default text-green"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-default text-blue"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-default text-red"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>


                    {{-- <tr>
                            <td class="text-center">{{ $ab->id }}</td>
                            <td class="text-center">{{ $ab->long_address_number }}</td>
                            <td class="text-center">{{ $ab->tax_id }}</td>
                            <td><a href="{{ route('users.show', $ab->id) }}">{{ $ab->name }}</a></td>
                            <td class="text-center">{{ $ab->created_at }}</td>
                            <td class="text-center">{{ $ab->update_at }}</td>

                        </tr> --}}
                    @endforeach
                </tbody>
            </table>
            </div>

            <br>
            <div class="text-center">
                {{ $addressbook->links() }}
            </div>
        </div>

    </div>
    
@endsection
