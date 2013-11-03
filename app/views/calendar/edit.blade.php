@extends('calendar/layout')

@section('content')
    {{ Form::model($danceEvent, array('action' => 'CalendarController@PostAddEvent')) }}
        {{ Form::text('title') }}
        {{ Form::textarea('description') }}
        {{ Form::text('eventDate') }}
        {{ Form::submit('asdf') }}
    {{ Form::close() }}
@stop