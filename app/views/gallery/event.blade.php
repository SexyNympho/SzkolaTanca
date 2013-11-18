@extends('gallery/layout')

@section('galleryTitle')
    {{ $title }}
@stop

@section('galleryThumbs')
    @foreach($photos as $photo)
    <li>
        <img src="{{ route('thumbnail', array('image' => $photo->id, 'width' => 200, 'height' => 150)) }}"/>
    </li>
    @endforeach
@stop