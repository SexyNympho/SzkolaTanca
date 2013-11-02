@extends('home/newsView')

@section('newsText')
    <p>{{ $news->lead() }}</p>
    @if ( $news->hasMoreThanLead() )
        {{ link_to_action('HomeController@News', 
                    'read more', 
                    array('news' => $news->id), 
                    array('class' => 'readMore')) }}
    @endif
@overwrite