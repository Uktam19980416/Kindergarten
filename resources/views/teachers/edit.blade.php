@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Teachers
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" action="{{ route('teachers.update', $teachers->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="Image">Images</label>
                                <input type="file" style="width: 500px;" class="form-control" id="images" name="images" value="{{ $teachers->images }}">
                            </div>
                            <div class="form-group">
                                <label for="full_name">Full Name</label>
                                <input type="text" style="width: 500px;" class="form-control" id="full_name" name="full_name" value="{{ $teachers->full_name }}">
                            </div>
                            <div class="form-group">
                                <label for="job">Job</label>
                                <input type="text" style="width: 500px;" class="form-control" id="job" name="job" value="{{ $teachers->job }}">
                            </div>
                            <div class="form-group">
                                <label for="slogan">Slogan</label>
                                <input type="text" style="width: 500px;" class="form-control" id="slogan" name="slogan" value="{{ $teachers->slogan }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>    
                            <a href="{{ route('teachers.index') }}" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="/uploads/teachers/{{ $teachers->images }}" style="width: 300px; height: 300px;" alt="">
                    </div>
                </div>
                
                 
            </div>
                {{-- {!! Form::model($teachers, ['route' => ['teachers.update', $teachers->id], 'method' => 'patch']) !!}

                        @include('teachers.fields')

                   {!! Form::close() !!} --}}
               
           </div>
       </div>
   </div>
@endsection