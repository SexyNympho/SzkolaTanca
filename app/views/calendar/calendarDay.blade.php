<div class="dayEvents">
    @foreach($events as $event)
        {{ link_to_route('displayEvent', $event->title, array('danceEvent' => $event->id)) }}
    @endforeach
</div>