@extends('layout')

@section('content')
<article>
    <time>{{ $event->eventDate }}</time>
    <h1>{{ $event->title }}</h1>
    <p>
        {{ $event->description }}
    </p>
</article>
{{ @Form::model($reminder, array('action' => 'CalendarController@SetupReminder')) }}
    {{ Form::email('email', 'tarnas14@gmail.com') }}
    {{ Form::hidden('dance_event_id', $event->id) }}
    {{ Form::submit('asdf') }}
{{ @Form::close() }}

@stop

@section('scripts')
<script type="text/javascript" src="{{ asset('js/calendar.js') }}"></script>
@stop