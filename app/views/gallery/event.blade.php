@extends('gallery/layout')

@section('galleryTitle')
    <h1>{{ $title }}</h1>
@stop

@section('galleryThumbs')
    @foreach($photos as $photo)
        @include('images/colorboxImage', array('photo' => $photo))
    @endforeach
@stop