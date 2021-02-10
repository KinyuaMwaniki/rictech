<div class="card-body">
    <div class="form-group row">
        {!! Form::label('header', 'Product/Service Name<span class="required-marker">*</span>', ['class' => 'col-sm-2
        col-form-label'], false) !!}
        <div class="col-sm-10">
            {!! Form::text('header', null, ['class' => 'form-control ' . ($errors->has('header') ? 'is-invalid' : '')])
            !!}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label(
        'subheader',
        'Description<span class="required-marker">*</span>',
        [
        'class' => 'col-sm-2
        col-form-label',
        ],
        false,
        ) !!}
        <div class="col-sm-10">
            {!! Form::text('subheader', null, ['class' => 'form-control ' . ($errors->has('subheader') ? 'is-invalid' :
            '')]) !!}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('image', 'Display Image<span class="required-marker">*</span>', ['class' => 'col-sm-2
        col-form-label'], false) !!}
        <div class="col-sm-10">
            {!! Form::file('image', null, [
            'class' => "custom-file-input
            {{ $errors->has('image') ? 'is-invalid' : '' }}",
            ]) !!}
            @error('image')
                <div class="error text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
