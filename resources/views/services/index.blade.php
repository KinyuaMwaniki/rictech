@extends('adminlte.page')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Company Services</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Services</li>
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
                            <a href="{!!  route('services.create') !!}" class="btn btn-info" type="button">New</a>
                        </div>

                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->header }}</td>
                                        <td>
                                            {!! $service->description !!}
                                        </td>
                                        <td>
                                            {!! Form::open(['route' => ['services.destroy', $service->id], 'method' => 'delete']) !!}
                                            <div class='btn-group'>
                                                <a href="{{ route('services.edit', $service->id) }}" class='btn btn-info btn-xs mr-2'>
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                                {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', [
                                                'type' => 'submit',
                                                'class' => 'btn btn-info btn-xs',
                                                'onclick' => "return confirm('Are you sure?')",
                                                ]) !!}
                                            </div>
                                            {!! Form::close() !!} 
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
