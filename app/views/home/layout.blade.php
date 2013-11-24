@extends('layout')

@section('styles')
    @parent
    
    {{ HTML::style('css/news.css') }}
@stop

@section('admin')
    {{ link_to_action('HomeController@AddNews', 'add news') }}
@stop