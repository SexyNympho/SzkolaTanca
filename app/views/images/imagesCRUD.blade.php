@extends('layout')

@section('styles')
    @parent
    <style>
        table, th, td {
            border: 1px solid black;
        }
        td {
            vertical-align:middle;
        }
    </style>
@stop

@section('content')
    {{ @Form::open(array('route' => $imagesCRUD->newImageRoute, 'files' => true)) }}
        {{ @Form::file('image') }}
        {{ @Form::submit('submit') }}
    {{ @Form::close() }}
    
    <table>
        @foreach($imagesCRUD->images as $image)
        <tr><td><img src='{{ route('thumbnail', array('image' => $image->id, 'width' => 200, 'height' => 150)) }}'/></td><td><a href='{{ $image->deletePath }}'>delete</a></td></tr>
        @endforeach
    </table>
@stop