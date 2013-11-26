@extends('gallery/layout')

@section('galleryThumbs')
    @if (count($galleryData) == 0)
    <p>no images to show</p>
    @endif
    @foreach($galleryData as $eventGallery)
    <a href="{{ route('eventGallery', array('danceStyle' => $selectedStyle, 'danceEvent' => $eventGallery['eventId'])) }}">
        @include('images/image', array('photo' => $eventGallery['photo'], 'caption' => $eventGallery['caption']))
    </a>
    @endforeach
@stop