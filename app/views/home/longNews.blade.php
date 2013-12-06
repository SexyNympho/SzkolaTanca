@extends('home/newsView')

@section('newsText')
<p> {{ $news->newsText }} </p>
@overwrite

@section('additionalLinks')
    @parent
    
    {{ link_to_route('home', 'Newsy', array(), array('id' => 'backToNews')) }}
    
@stop