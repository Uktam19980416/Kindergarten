@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Kinder
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($kinder, ['route' => ['kinders.update', $kinder->id], 'method' => 'post']) !!}

                        @include('kinders.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection