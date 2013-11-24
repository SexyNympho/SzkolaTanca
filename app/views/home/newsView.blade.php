<article class="news group">
    <header class="group">
        <h1>{{ link_to_action('HomeController@News', $news->title, array('news' => $news->id)) }}</h1>
        <time>{{ $news->created_at }}</time>
    </header>
    @yield('newsText')
    @section('additionalLinks')
        @if ($news->danceEvent != null)
        <div class="relatedEvent">this news is related to an event: {{ link_to_route('displayEvent', $news->danceEvent->title, array('danceEvent' => $news->danceEvent->id)) }}</div>
        @endif
    @show
</article>