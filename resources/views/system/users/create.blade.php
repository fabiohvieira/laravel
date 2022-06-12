@extends('app')

@section('content')
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <h5 class="card-header">User Detail</h5>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">User</label>
                            <div class="col-md-4">
                                <input type="text" name="user" id="user" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Password</label>
                            <div class="col-md-4">
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Confirm Password</label>
                            <div class="col-md-4">
                                <input type="text" name="confirm_password" id="confirm_password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success float-right">Save</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        {{ $user->id }}
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
