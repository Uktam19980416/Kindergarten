@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Kinder News
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="container">
                        <form method="post" action="{{ route('kinderNews.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" style="width: 500px;" class="form-control" id="title" name="title" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label for="Description">Description</label>
                                <textarea style="width: 500px; height:200px;" class="form-control" id="description" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="Image">Image</label>
                                <input type="file" style="width: 500px;" class="form-control" id="images" name="images" value="{{ old('images') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>    
                            <a href="{{ route('kinderNews.index') }}" class="btn btn-default">Cancel</a>
                        </form>    
                    </div>                   
                    {{-- {!! Form::open(['route' => 'kinderNews.store']) !!}

                        @include('kinder_news.fields')

                    {!! Form::close() !!} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
