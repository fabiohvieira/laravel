@extends('app')

@section('content')
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <h5 class="card-header">Role Detail</h5>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-4">
                                <input type="text" name="name" id="name" class="form-control" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary float-right">Save</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        {{ $role->id }}
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
