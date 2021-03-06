@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-9">

            <div class="card">
                <h5 class="card-header">
                    User Detail
                </h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="name">User</label>
                        </div>
                        <div class="col-md-8">
                            {{ $user->user }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label for="name">Address Book</label>
                        </div>
                        <div class="col-md-8">
                            <a href="">{{ $user->address_book }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <h5 class="card-header">
                            Roles
                        </h5>
                        <div class="card-body">
                            @if (count($user->roles) > 0)
                                <table class="table">
                                    <tbody>
                                        @foreach ($user->roles as $role)
                                            <tr>
                                                <td>{{ $role->role->name }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <span class="lead text-center">Any results found</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    {{ $user->id }}
                </div>
                <div class="card-footer">
                    <a href="{{ route('users.edit', $user->id) }}"
                        class="btn btn-primary float-left">@lang('crud.edit')</a>
                    <a href="{{ route('users.destroy', $user->id) }}"
                        class="btn btn-danger float-right">@lang('crud.delete')</a>
                </div>
            </div>
        </div>
    </div>

@endsection
