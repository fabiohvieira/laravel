@extends('app')

@section('content')

    <div class="row">
        <div class="col-md-9">

            <div class="card">
                <h5 class="card-header">
                    User Detail
                </h5>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">User</label>
                        <div class="col-md-8">
                            <input type="text" name="" id="" class="form-control" value="{{ $user->user }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">Address Book</label>
                        <div class="col-md-8">
                            <a href="">{{ $user->address_book->name }}</a>
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
                            <div class="row pb-3">
                                <div class="col-md-10">
                                    <select name="role" id="role" class="form-control">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-success btn-block"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            @if (count($user->roles) > 0)
                                <table class="table">
                                    <tbody>
                                        @foreach ($user->roles as $role)
                                            <tr>
                                                <td>{{ $role->role->name }}</td>
                                                <td width="1%" class="text-center">
                                                    <a href="" class="text-red"><i class="fa fa-trash"></i></a>
                                                </td>
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
                        class="btn btn-success float-left">@lang('crud.save')</a>
                    <a href="{{ route('users.destroy', $user->id) }}"
                        class="btn btn-warning float-right">@lang('crud.cancel')</a>
                </div>
            </div>
        </div>
    </div>

@endsection
