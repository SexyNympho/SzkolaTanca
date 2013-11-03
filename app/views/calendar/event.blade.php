@extends('calendar/layout')

@section('content')
<article>
    <time>{{ $event->eventDate }}</time>
    <h1>{{ $event->title }}</h1>
    <p>
        {{ $event->description }}
    </p>
</article>
{{ @Form::model($reminder, array('action' => 'CalendarController@SetupReminder')) }}
    {{ Form::email('email') }}
    {{ Form::hidden('dance_event_id', $event->id) }}
    {{ Form::submit('asdf') }}
{{ @Form::close() }}

@stop