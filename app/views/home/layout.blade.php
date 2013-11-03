@extends('layout')

@section('admin')
    {{ link_to_action('HomeController@AddNews', 'add news') }}
@stop