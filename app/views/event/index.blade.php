@extends('event/layout')

@section('content')
<article>
    <header>
        <h1>{{ $event->title }}</h1>
        <time>{{ $event->eventDate }}</time>
    </header>
    <p>
        {{ $event->description }}
    </p>
    
    @if ($event->photos !== null)
    <div class="group photoGrid">
        @foreach($event->photos as $photo)
            @include('image', array('photo' => $photo))
        @endforeach
    </div>
    @endif
</article>
<div id="reminder">
    <h2>Setup a reminder</h2>
    <p>You will receive an email reminder a day before this event starts.</p>
    {{ @Form::model($reminder, array('action' => 'EventController@SetupReminder')) }}
        {{ Form::email('email', null, array('placeholder' => 'your@email.com')) }}
        {{ Form::hidden('dance_event_id', $event->id) }}
        {{ Form::submit('submit') }}
    {{ @Form::close() }}
</div>

@stop

@section('admin')
    @parent

    {{ link_to_route('eventImagesCRUD', 'manage images', array('danceEvent' => $event->id)) }}
@stop