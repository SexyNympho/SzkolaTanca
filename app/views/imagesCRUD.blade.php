@extends('layout')

@section('content')
    {{ @Form::open(array('route' => $imagesCRUD->newImageRoute, 'files' => true)) }}
        {{ @Form::file('image') }}
        {{ @Form::submit('heh') }}
    {{ @Form::close() }}
    
    <table>
        @foreach($imagesCRUD->images as $image)
        <tr><td><img src='{{ asset($image->imagePath) }}'/></td><td><a href='{{ $image->deletePath }}'>delete</a></td></tr>
        @endforeach
    </table>
@stop