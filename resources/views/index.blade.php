@extends('layout')

@section('content')

    @foreach($photos as $photo)
        {{ $photo->title }}
        {{ $photo->description }}
        <img src="{{ $photo->photofile }}" />
    @endforeach
@endsection
