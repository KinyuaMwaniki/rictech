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
                    <div class="card-header">
                        {{-- <h3 class="card-title">dd</h3> --}}
                    </div>
                    <form role="form" action="{{ route('company.edit', $company_detail->id  ) }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="company_name" class="col-sm-2 col-form-label">Company Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="company_name" name="company_name"
                                        placeholder="Company Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="mobile" name="mobile"
                                        placeholder="Mobile Phone Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="facebook" name="facebook"
                                        placeholder="Facebook Page Link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="twitter" name="twitter"
                                        placeholder="Twitter Page Link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                                <div class="col-sm-10">
                                    <input type="instagram" class="form-control" id="instagram" name="instagram"
                                        placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
