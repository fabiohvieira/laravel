@extends('app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('addressbook.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <h5 class="card-header">Address Book</h5>
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">@lang('addressbook.long_address_number')</label>
                            <div class="col-md-4">
                                <input type="text" name="long_address_number" id="long_address_number" class="form-control" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">@lang('addressbook.tax_id')</label>
                            <div class="col-md-4">
                                <input type="text" name="tax_id" id="tax_id" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">@lang('addressbook.name')</label>
                            <div class="col-md-4">
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">@lang('addressbook.search_type')</label>
                            <div class="col-md-4">
                                <input type="text" name="search_type" id="search_type" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">@lang('addressbook.address_line_1')</label>
                            <div class="col-md-4">
                                <input type="text" name="address_line_1" id="address_line_1" class="form-control" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">@lang('addressbook.address_line_2')</label>
                            <div class="col-md-4">
                                <input type="text" name="address_line_2" id="address_line_2" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">@lang('addressbook.address_line_3')</label>
                            <div class="col-md-4">
                                <input type="text" name="address_line_3" id="address_line_3" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">@lang('addressbook.address_line_4')</label>
                            <div class="col-md-4">
                                <input type="text" name="address_line_4" id="address_line_4" class="form-control">
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
                       
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
