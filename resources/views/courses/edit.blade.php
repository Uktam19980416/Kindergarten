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

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" action="{{ route('courses.update', $courses->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="Image">Images</label>
                                <input type="file" style="width: 500px;" class="form-control" id="images" name="images" value="{{ $courses->images }}">
                            </div>
                            <div class="form-group">
                                <label for="title">Course Name</label>
                                <input type="text" style="width: 500px;" class="form-control" id="course_name" name="course_name" value="{{ $courses->course_name }}">
                            </div>
                            <div class="form-group">
                                <label for="title">Course Time</label>
                                <input type="text" style="width: 500px;" class="form-control" id="course_time" name="course_time" value="{{ $courses->course_time }}">
                            </div>
                            <div class="form-group">
                                <label for="title">About Course</label>
                                <input type="text" style="width: 500px;" class="form-control" id="about_course" name="about_course" value="{{ $courses->about_course }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>    
                            <a href="{{ route('courses.index') }}" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="/uploads/courses/{{ $courses->images }}" style="width: 300px; height: 300px;" alt="">
                    </div>
                </div>
                
                 
            </div>

               {{-- <div class="row">
                   {!! Form::model($courses, ['route' => ['courses.update', $courses->id], 'method' => 'patch']) !!}

                        @include('courses.fields')

                   {!! Form::close() !!} --}}
               </div>
           </div>
       </div>
   </div>
@endsection