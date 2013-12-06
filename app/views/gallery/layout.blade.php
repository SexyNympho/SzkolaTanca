@extends('layout')

@section('styles')
    @parent
    
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
@stop

@section('content')
<div id="gallery" class="group">
    <ul id="styles">
        @yield('galleryMenuLinks')
    </ul>
    <div id="galleryThumbs">
        @yield('galleryTitle')
        <div class="photoGrid">
        @yield('galleryThumbs')
        </div>
    </div>
</div>
@stop

@section('breadcrumbs')
    @parent
    
    <li>{{ link_to_route('galleryMain', 'Galeria') }}</li>
@stop