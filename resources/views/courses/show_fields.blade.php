<!-- Images Field -->
<div class="form-group">
    {!! Form::label('images', 'Images:') !!}
    <p>{{ $courses->images }}</p>
</div>

<!-- Course Name Field -->
<div class="form-group">
    {!! Form::label('course_name', 'Course Name:') !!}
    <p>{{ $courses->course_name }}</p>
</div>

<!-- Course Time Field -->
<div class="form-group">
    {!! Form::label('course_time', 'Course Time:') !!}
    <p>{{ $courses->course_time }}</p>
</div>

<!-- About Course Field -->
<div class="form-group">
    {!! Form::label('about_course', 'About Course:') !!}
    <p>{{ $courses->about_course }}</p>
</div>

