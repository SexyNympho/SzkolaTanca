@extends('instructors/layout')

@section('content')
    {{ Form::model($instructor, array('route' => $routeArray, 'files' => true)) }}
        <p>{{ Form::text('name') }}</p>
        <p>{{ Form::text('surname') }}</p>
        <p>{{ Form::textarea('description') }}</p>
        <p>{{ Form::file('instructorPhoto') }}</p>
        @if ($instructor->photo !== null)
        <p>@include('images/colorboxImage', array('photo' => $instructor->photo))</p>
        @endif
        <p>{{ Form::submit('submit') }}</p>
    {{ Form::close() }}
@stop