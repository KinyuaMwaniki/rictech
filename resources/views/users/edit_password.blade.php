@extends('adminlte.page')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Password</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Update Password</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    {!! Form::open(['route' => ['users.update-password', $user->id], 'method' => 'patch']) !!}
                    <div class="card-body">
                        <div class="form-group row">
                            {!! Form::label('password', 'Password<span class="required-marker">*</span>', ['class' =>
                            'col-sm-2 col-form-label'], false) !!}
                            <div class="col-sm-10">
                                <input type="password" name ="password" class="form-control" value="" required>
                                @error('password')
                                    <div class="error text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label(
                            'password_confirmation',
                            'Password Confirmation<span class="required-marker">*</span>',
                            ['class' => 'col-sm-2 col-form-label'],
                            false,
                            ) !!}
                            <div class="col-sm-10">
                                <input type="password" name ="password_confirmation" class="form-control" value="" required>
                                @error('password_confirmation')
                                    <div class="error text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>



                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
