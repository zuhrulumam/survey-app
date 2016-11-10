<!-- Id Status Henti Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ID_STATUS_HENTI', 'Id Status Henti:') !!}
    {!! Form::number('ID_STATUS_HENTI', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nama', 'Nama:') !!}
    {!! Form::text('Nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Nip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NIP', 'Nip:') !!}
    {!! Form::text('NIP', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ID_UNIT', 'Id Unit:') !!}
    {!! Form::number('ID_UNIT', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Sub Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ID_SUB_UNIT', 'Id Sub Unit:') !!}
    {!! Form::number('ID_SUB_UNIT', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Jenis Staf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ID_JENIS_STAF', 'Id Jenis Staf:') !!}
    {!! Form::text('ID_JENIS_STAF', null, ['class' => 'form-control']) !!}
</div>

<!-- Fakultas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FAKULTAS', 'Fakultas:') !!}
    {!! Form::text('FAKULTAS', null, ['class' => 'form-control']) !!}
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! Form::date('created_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! Form::date('updated_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Deleted At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    {!! Form::date('deleted_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('dataDosens.index') !!}" class="btn btn-default">Cancel</a>
</div>
