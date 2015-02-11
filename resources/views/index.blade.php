@extends('layout')

@section('content')
    @foreach($photos as $photo)
        {{ $photo->title }}
        {{ $photo->description }}
    @endforeach
@endsection
