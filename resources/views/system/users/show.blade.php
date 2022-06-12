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
                        {{ $user->username }}
                    </div>
                </div>
    
    
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                {{$user->id}}
            </div>
        </div>
    </div>
</div>

@endsection
