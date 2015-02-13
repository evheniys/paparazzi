@extends('layout')

@section('content')
    <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4" >
    @foreach($photos as $photo)
        <li><a class="th image-popup-vertical-fit" href="{{ $photo->photofile }}" ><img src="{{ $photo->photofile }}" title="{{ $photo->title }}" alt="{{ $photo->description }}"></a></li>
    @endforeach
    </ul>
@endsection
