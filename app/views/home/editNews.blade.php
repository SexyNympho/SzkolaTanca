@extends('layout')

@section('content')
    {{ Form::model($news, array('action' => 'HomeController@PostAddNews')) }}
        <p>title: {{ Form::text('title') }}</p>
        <p>text: {{ Form::textarea('newsText') }}</p>
        <p>{{ Form::submit("fag") }}</p>
    {{ Form::close() }}
@stop