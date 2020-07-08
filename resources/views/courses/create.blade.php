@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Courses
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">

                    <div class="container">
                        <form method="post" action="{{ route('courses.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="Image">Images</label>
                                <input type="file" style="width: 500px;" class="form-control" id="images" name="images" value="{{ old('images') }}">
                            </div>
                            <div class="form-group">
                                <label for="title">Course Name</label>
                                <input type="text" style="width: 500px;" class="form-control" id="course_name" name="course_name" value="{{ old('course_name') }}">
                            </div>
                            <div class="form-group">
                                <label for="title">Course Time</label>
                                <input type="text" style="width: 500px;" class="form-control" id="course_time" name="course_time" value="{{ old('course_time') }}">
                            </div>
                            <div class="form-group">
                                <label for="title">About Course</label>
                                <input type="text" style="width: 500px;" class="form-control" id="about_course" name="about_course" value="{{ old('about_course') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>    
                            <a href="{{ route('courses.index') }}" class="btn btn-default">Cancel</a>
                        </form>    
                    </div>

                    {{-- {!! Form::open(['route' => 'courses.store']) !!}

                        @include('courses.fields')

                    {!! Form::close() !!} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
