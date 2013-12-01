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
        {{ @Form::submit('add') }}
    {{ @Form::close() }}
    
    <table>
        @foreach($imagesCRUD->images as $image)
        <tr><td>@include('images/colorboxImage', array('photo' => $image->photo))</td><td><a href='{{ $image->deletePath }}'>delete</a></td></tr>
        @endforeach
    </table>
@stop