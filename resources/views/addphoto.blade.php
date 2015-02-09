@extends('layout')

@section('content')

    {!! Form::open() !!}
    <div class="row">
    <div class="small-3 columns">
    {!! Form::label('title','Название:',['class'=>'right inline']) !!}
    </div>
    <div class="small-9 columns last">
    {!! Form::text('title') !!}
    </div>
    </div>
    <div class="row">
    <div class="small-3 columns">
        {!! Form::label('description','Описание:',['class'=>'right inline']) !!}
    </div>
    <div class="small-9 columns">
        {!! Form::textarea('description') !!}
    </div>
</div>
    <div class="row">

    </div>

    {!! Form::close() !!}

@endsection