<article class="newsArticle group">
    <time>{{ $news->created_at }}</time>
    <header>{{ link_to_action('HomeController@News', $news->title, array('news' => $news->id)) }}</header>
    @yield('newsText')
    @section('additionalLinks')
        @if ($news->danceEvent != null)
        <div class="relatedEvent">this news is related to an event: {{ link_to_route('displayEvent', $news->danceEvent->title, array('danceEvent' => $news->danceEvent->id)) }}</div>
        @endif
    @show
</article>