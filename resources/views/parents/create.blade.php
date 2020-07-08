@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Parents
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">

                    <div class="container">
                        <form method="post" action="{{ route('parents.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="Image">Images</label>
                                <input type="file" style="width: 500px;" class="form-control" id="images" name="images" value="{{ old('images') }}">
                            </div>
                            <div class="form-group">
                                <label for="about_kinder">About Kinder</label>
                                <input type="text" style="width: 500px;" class="form-control" id="about_kinder" name="about_kinder" value="{{ old('about_kinder') }}">
                            </div>
                            <div class="form-group">
                                <label for="full_name">Full Name</label>
                                <input type="text" style="width: 500px;" class="form-control" id="full_name" name="full_name" value="{{ old('full_name') }}">
                            </div>
                            <div class="form-group">
                                <label for="parent">Parents (Father or Mother)</label>
                                <input type="text" style="width: 500px;" class="form-control" id="parent" name="parent" value="{{ old('parent') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>    
                            <a href="{{ route('parents.index') }}" class="btn btn-default">Cancel</a>
                        </form>    
                    </div>

                    {{-- {!! Form::open(['route' => 'parents.store']) !!}

                        @include('parents.fields')

                    {!! Form::close() !!} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
