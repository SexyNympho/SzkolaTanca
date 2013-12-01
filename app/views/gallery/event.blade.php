@extends('gallery/layout')

@section('galleryTitle')
    <h1>{{ $title }}</h1>
@stop

@section('galleryMenuLinks')
    @foreach($events as $event)
    <?php
        $class = ($event->id == $selectedEvent) ? 'class="selected"' : '';
    ?>
    <li {{ $class }}>
        {{ link_to_route('eventGallery', $event->title, array('danceStyle' => $selectedStyle, 'danceEvent' => $event->id)) }}
    </li>
    @endforeach
@stop

@section('galleryThumbs')
    @foreach($photos as $photo)
        @include('images/colorboxImage', array('photo' => $photo))
    @endforeach
@stop