@extends('gallery/layout')

@section('galleryTitle')
    <h1>{{ $title }}</h1>
@stop

@section('galleryMenuLinks')
    @foreach($events as $event)
    <?php
        $selectedEventName = ($event->id == $selectedEvent) ? $event->title : null;
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

@section('breadcrumbs')
    @parent
    
    <li>{{ link_to_route('eventGallery', $selectedEventName, array('danceStyle' => $selectedStyle, 'danceEvent' => $selectedEvent)) }}</li>
@stop