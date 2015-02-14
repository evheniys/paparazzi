@extends('layout')

@section('content')
    <div id="imgcontainer" class="small-block-grid-1 medium-block-grid-2 large-block-grid-4" >
    @foreach($photos as $photo)
            <a class="image-popup-vertical-fit" href="{{ $photo->photofile }}" >
                <img class="th thmb" src="{{ $photo->photothumb }}" title="{{ $photo->title }}" alt="{{ $photo->description }}">
            </a>
    @endforeach
    </div>
@endsection
