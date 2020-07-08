@extends('layouts.code')

@section('content')
    
<div class="container text-center mt-5">
    <img src="/uploads/news/{{ $section->images }}" width="400" height="300" alt="">
        <div class="text-center"><h4>{{ $section->title }}</h4>
            <div class="text-center">{{ $section->desrciption }}</div>
        </div>
    </div>
@endsection