@extends('event/layout')

@section('content')
<article>
    <time>{{ $event->eventDate }}</time>
    <h1>{{ $event->title }}</h1>
    <p>
        {{ $event->description }}
    </p>
    <div class="group">
        @foreach($event->photos as $photo)
            <img src="{{ asset($photo->Path()) }}" class="eventImage"/>
        @endforeach
    </div>
</article>
{{ @Form::model($reminder, array('action' => 'EventController@SetupReminder')) }}
    {{ Form::email('email') }}
    {{ Form::hidden('dance_event_id', $event->id) }}
    {{ Form::submit('asdf') }}
{{ @Form::close() }}
@stop

@section('admin')
    @parent

    {{ link_to_route('eventImagesCRUD', 'manage images', array('danceEvent' => $event->id)) }}<br/>
@stop