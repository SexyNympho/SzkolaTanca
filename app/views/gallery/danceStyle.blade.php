@extends('gallery/layout')

@section('galleryThumbs')
    @if (count($galleryData) == 0)
    <li>no images to show</li>
    @endif
    @foreach($galleryData as $eventGallery)
    <li>
        <a href="{{ route('eventGallery', array('danceStyle' => $selectedStyle, 'danceEvent' => $eventGallery['eventId'])) }}">
        <figure>
            <img src="{{ route('thumbnail', array('image' => $eventGallery['photo']->id, 'width' => 200, 'height' => 150)) }}"/>
            <figcaption>{{ $eventGallery['caption'] }}</figcaption>
        </figure>
        </a>
    </li>
    @endforeach
@stop