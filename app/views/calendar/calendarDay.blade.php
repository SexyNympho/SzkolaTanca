@foreach($events as $event)
<a href='{{ URL::action('CalendarController@Event', array('danceEvent' => $event->id)) }}'>
<div class="event">
    {{ $event->title }}
</div>
</a>
@endforeach