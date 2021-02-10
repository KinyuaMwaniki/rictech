@extends('adminlte.page')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Company Details</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Company Details</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="text-right">
                            <a href="{!!  route('company.edit', $company_detail->id) !!}" class="btn btn-info"
                                type="button">Edit</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-4">Company Name</dt>
                            <dd class="col-sm-8">{{ $company_detail->company_name }}</dd>
                            <dt class="col-sm-4">Company Email</dt>
                            <dd class="col-sm-8">{{ $company_detail->email }}</dd>
                            <dt class="col-sm-4">Mobile</dt>
                            <dd class="col-sm-8">{{ $company_detail->mobile }}
                            <dd>
                            <dt class="col-sm-4">Facebook</dt>
                            <dd class="col-sm-8">{{ $company_detail->facebook }}</dd>
                            <dt class="col-sm-4">Twitter</dt>
                            <dd class="col-sm-8">{{ $company_detail->twitter }}</dd>
                            <dt class="col-sm-4">Instagram</dt>
                            <dd class="col-sm-8">{{ $company_detail->instagram }}</dd>
                            <dt class="col-sm-4">About Us: Heading</dt>
                            <dd class="col-sm-8">{{ $company_detail->about_us_heading }}</dd>
                            <dt class="col-sm-4">About Us: Description</dt>
                            <dd class="col-sm-8">{!! $company_detail->about_us_description !!}</dd>
                        </dl>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
