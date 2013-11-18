@extends('event/layout')

@section('content')
    {{ Form::model($danceEventVM, array('action' => 'EventController@PostAddEvent')) }}
        {{ Form::text('eventTitle') }}
        {{ Form::textarea('eventDescription') }}
        {{ Form::text('eventDate') }}
        <ul>
            @foreach($errors->get('eventDate') as $error)
                {{ $error }}
            @endforeach
        </ul>
        {{ Form::select('eventStyles[]', $danceEventVM->stylesDropdown, $danceEventVM->eventStyles, array('multiple')) }}
        {{ Form::submit('submit') }}
    {{ Form::close() }}
@stop