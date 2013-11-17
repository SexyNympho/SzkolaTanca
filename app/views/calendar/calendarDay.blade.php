@foreach($events as $event)
<a href='{{ URL::route('displayEvent', array('danceEvent' => $event->id)) }}'>
<div class="event">
    {{ $event->title }}
</div>
</a>
@endforeach