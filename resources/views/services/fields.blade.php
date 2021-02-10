<div class="card-body">
    <div class="form-group row">
        {!! Form::label('header', 'Service Name<span class="required-marker">*</span>', ['class' => 'col-sm-2
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
            {!! Form::textarea('description', null, ['class' => 'form-control summernote' . ($errors->has('description') ? 'is-invalid' :
            '')]) !!}
            @error('description')
                <div class="error text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
