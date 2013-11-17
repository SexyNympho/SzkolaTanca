@extends('calendar/layout')

@section('content')
    {{ Form::model($danceEventVM, array('action' => 'CalendarController@PostAddEvent')) }}
        {{ Form::text('eventTitle') }}
        {{ Form::textarea('eventDescription') }}
        {{ Form::text('eventDate') }}
        <ul>
            @foreach($errors->get('eventDate') as $error)
                {{ $error }}
            @endforeach
        </ul>
        {{ Form::select('eventStyles[]', $danceEventVM->stylesDropdown, $danceEventVM->eventStyles, array('multiple')) }}
        {{ Form::submit('asdf') }}
    {{ Form::close() }}
@stop