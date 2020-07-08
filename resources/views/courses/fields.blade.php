<!-- Images Field -->
<div class="form-group col-sm-6">
    {!! Form::label('images', 'Images:') !!}
    {!! Form::text('images', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_name', 'Course Name:') !!}
    {!! Form::text('course_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_time', 'Course Time:') !!}
    {!! Form::text('course_time', null, ['class' => 'form-control']) !!}
</div>

<!-- About Course Field -->
<div class="form-group col-sm-6">
    {!! Form::label('about_course', 'About Course:') !!}
    {!! Form::text('about_course', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('courses.index') }}" class="btn btn-default">Cancel</a>
</div>
