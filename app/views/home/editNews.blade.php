@extends('home/layout')

@section('content')
    {{ Form::model($news, array('action' => 'HomeController@PostAddNews')) }}
        <p>title: {{ Form::text('title') }}</p>
        <p>text: {{ Form::textarea('newsText') }}</p>
        <p>danceEvent: {{ Form::select('danceEvent', $danceEvents) }}</p>
        <p>{{ Form::submit("fag") }}</p>
    {{ Form::close() }}
@stop