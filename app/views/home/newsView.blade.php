<article class='group'>
    <time>{{ $news->created_at }}</time>
    <header>{{ link_to_action('HomeController@News', $news->title, array('news' => $news->id)) }}</header>
    @yield('newsText')
</article>