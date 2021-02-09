@extends('adminlte.page')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Company Details</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Company Details</li>
                <li class="breadcrumb-item active">Edit Company Details</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    {!! Form::model($company_detail, ['route' => ['company.update', $company_detail->id],  'enctype' => 'multipart/form-data', 'method' =>
                    'patch']) !!}
                    <div class="card-body">
                        <div class="form-group row">
                            {!! Form::label('company_name', 'Company Name<span class="required-marker">*</span>', ['class'
                            => 'col-sm-2 col-form-label'], false) !!}
                            <div class="col-sm-10">
                                {!! Form::text('company_name', null, ['class' => 'form-control ' .
                                ($errors->has('company_name') ? 'is-invalid' : '')]) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label(
                            'email',
                            'Email<span class="required-marker">*</span>',
                            [
                            'class' => 'col-sm-2
                            col-form-label',
                            ],
                            false,
                            ) !!}
                            <div class="col-sm-10">
                                {!! Form::text('email', null, ['class' => 'form-control ' . ($errors->has('email') ?
                                'is-invalid' : '')]) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label(
                            'mobile',
                            'Mobile<span class="required-marker">*</span>',
                            [
                            'class' => 'col-sm-2
                            col-form-label',
                            ],
                            false,
                            ) !!}
                            <div class="col-sm-10">
                                {!! Form::text('mobile', null, ['class' => 'form-control ' . ($errors->has('mobile') ?
                                'is-invalid' : '')]) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('facebook', 'Facebook', ['class' => 'col-sm-2 col-form-label'], false) !!}
                            <div class="col-sm-10">
                                {!! Form::text('facebook', null, [
                                'class' => "form-control
                                {{ $errors->has('facebook') ? 'is-invalid' : '' }}",
                                ]) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('twitter', 'Twitter', ['class' => 'col-sm-2 col-form-label'], false) !!}
                            <div class="col-sm-10">
                                {!! Form::text('twitter', null, [
                                'class' => "form-control
                                {{ $errors->has('twitter') ? 'is-invalid' : '' }}",
                                ]) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('instagram', 'Instagram', ['class' => 'col-sm-2 col-form-label'], false) !!}
                            <div class="col-sm-10">
                                {!! Form::text('instagram', null, [
                                'class' => "form-control
                                {{ $errors->has('instagram') ? 'is-invalid' : '' }}",
                                ]) !!}
                            </div>
                        </div>


                        <div class="form-group row">
                            {!! Form::label('slogan', 'Company Slogan', ['class' => 'col-sm-2 col-form-label'], false) !!}
                            <div class="col-sm-10">
                                {!! Form::text('slogan', null, [
                                'class' => "form-control
                                {{ $errors->has('slogan') ? 'is-invalid' : '' }}",
                                ]) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('logo', 'Company Logo', ['class' => 'col-sm-2 col-form-label'], false) !!}
                            <div class="col-sm-10">
                                {!! Form::file('logo', null, [
                                'class' => "custom-file-input
                                {{ $errors->has('logo') ? 'is-invalid' : '' }}",
                                ]) !!}
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
