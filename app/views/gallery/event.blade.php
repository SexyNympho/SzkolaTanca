@extends('gallery/layout')

@section('galleryTitle')
    {{ $title }}
@stop

@section('galleryThumbs')
    @foreach($photos as $photo)
        @include('images/colorboxImage', array('photo' => $photo))
    @endforeach
@stop