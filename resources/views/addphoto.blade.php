@extends('layout')

@section('content')
<hr />
    {!! Form::open(['files' => true]) !!}
    <div class="row">
    <div class="small-2 columns">
    {!! Form::label('title','Название:',['class'=>'right inline']) !!}
    </div>
    <div class="small-8 columns left">
    {!! Form::text('title') !!}
    </div>
    </div>
    <div class="row">
    <div class="small-2 columns">
        {!! Form::label('description','Описание:',['class'=>'right inline']) !!}
    </div>
    <div class="small-8 columns left">
        {!! Form::textarea('description') !!}
    </div>
</div>
    <div class="row">
        <div class="small-2 columns">
            {!! Form::label('photo','Фотография:',['class'=>'right inline']) !!}
        </div>
        <div class="small-8 columns left">
            {!! Form::file('photofile'); !!}
        </div>
    </div>
<div class="row">
    <div class="small-2 columns">
        {!! Form::submit('Добавить фото'); !!}
    </div>
</div>
@endsection