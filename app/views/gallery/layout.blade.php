@extends('layout')

@section('styles')
    @parent
    
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
@stop

@section('content')
<div id="gallery" class="group">
    <ul id="styles">
        @foreach($styles as $style)
        <li @if($style->id == $selectedStyle) class="selected" @endif >{{ link_to_route('danceStyleGallery', $style->name, array('danceStyle' => $style->id)) }}</li>
        @endforeach
    </ul>
    <div>
        <h1>@yield('galleryTitle')</h1>
        <ul id="galleryThumbs">
        @yield('galleryThumbs')
        </ul>
    </div>
</div>
@stop