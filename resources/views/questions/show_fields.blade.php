<!-- Question Id Field -->
<div class="form-group">
    {!! Form::label('question_id', 'Question Id:') !!}
    <p>{!! $questions->question_id !!}</p>
</div>

<!-- Question Slug Field -->
<div class="form-group">
    {!! Form::label('question_slug', 'Question Slug:') !!}
    <p>{!! $questions->question_slug !!}</p>
</div>

<!-- Question Category Id Field -->
<div class="form-group">
    {!! Form::label('question_category_id', 'Question Category Id:') !!}
    <p>{!! $questions->question_category_id !!}</p>
</div>

<!-- Question Text Field -->
<div class="form-group">
    {!! Form::label('question_text', 'Question Text:') !!}
    <p>{!! $questions->question_text !!}</p>
</div>

<!-- First Category Comparation Field -->
<div class="form-group">
    {!! Form::label('first_category_comparation', 'First Category Comparation:') !!}
    <p>{!! $questions->first_category_comparation !!}</p>
</div>

<!-- Second Category Comparation Field -->
<div class="form-group">
    {!! Form::label('second_category_comparation', 'Second Category Comparation:') !!}
    <p>{!! $questions->second_category_comparation !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $questions->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $questions->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $questions->deleted_at !!}</p>
</div>

