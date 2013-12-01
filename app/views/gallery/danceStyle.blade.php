@extends('gallery/layout')

@section('galleryMenuLinks')
@section('galleryMenuLinks')
    @foreach($styles as $style)
        <li @if($style->id == $selectedStyle) class="selected" @endif >
             {{ link_to_route('danceStyleGallery', $style->name, array('danceStyle' => $style->id)) }}
        </li>
    @endforeach
@stop

    @foreach($styles as $style)
    <li @if($style->id == $selectedStyle) class="selected" @endif >{{ link_to_route('danceStyleGallery', $style->name, array('danceStyle' => $style->id)) }}</li>
    @endforeach
@stop

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