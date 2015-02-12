@extends('layout')

@section('content')
    <ul class="clearing-thumbs clearing-feature small-block-grid-1 medium-block-grid-2 large-block-grid-4" >
    @foreach($photos as $photo)
        <li><a class="th" href="{{ $photo->photofile }}" data-reveal><img src="{{ $photo->photofile }}" title="{{ $photo->title }}" alt="{{ $photo->description }}"></a></li>
    @endforeach
    </ul>
@endsection
