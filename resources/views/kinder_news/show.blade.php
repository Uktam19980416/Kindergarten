@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Kinder News
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('kinder_news.show_fields')
                    <a href="{{ route('kinderNews.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
