@if (isset($errors) && (count($errors) > 0))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    {{ Form::label('name', 'Name') }} <em class="required">*</em>
    {{ Form::text('dname', null, ['class' => 'form-control', 'id' => 'dname', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('location', 'Location') }} <em class="required">*</em>
    {{ Form::select('loc', $locations,null,['class' => 'form-control', 'id' => 'loc', 'required' => 'required']) }}
</div>



<div class="form-group">
    {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
</div>