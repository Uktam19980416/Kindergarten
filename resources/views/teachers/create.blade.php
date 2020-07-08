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
                <div class="row">

                    <div class="container">
                        <form method="post" action="{{ route('teachers.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="Image">Images</label>
                                <input type="file" style="width: 500px;" class="form-control" id="images" name="images" value="{{ old('images') }}">
                            </div>
                            <div class="form-group">
                                <label for="full_name">Full Name</label>
                                <input type="text" style="width: 500px;" class="form-control" id="full_name" name="full_name" value="{{ old('full_name') }}">
                            </div>
                            <div class="form-group">
                                <label for="job">Job</label>
                                <input type="text" style="width: 500px;" class="form-control" id="job" name="job" value="{{ old('job') }}">
                            </div>
                            <div class="form-group">
                                <label for="slogan">Slogan</label>
                                <input type="text" style="width: 500px;" class="form-control" id="slogan" name="slogan" value="{{ old('slogan') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>    
                            <a href="{{ route('teachers.index') }}" class="btn btn-default">Cancel</a>
                        </form>    
                    </div>

                    {{-- {!! Form::open(['route' => 'teachers.store']) !!}

                        @include('teachers.fields')

                    {!! Form::close() !!} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
