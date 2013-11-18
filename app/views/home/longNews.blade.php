@extends('home/newsView')

@section('newsText')
<p> {{ $news->newsText }} </p>
@overwrite

@section('additionalLinks')
    @parent
    
    {{ link_to_route('home', 'back to news', array(), array('id' => 'backToNews')) }}
    
@stop