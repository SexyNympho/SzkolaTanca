@extends('home/layout')

@section('content')
    @include('home/longNews', array('news' => $news))
    {{ link_to_action('HomeController@Index', 'back to news') }}
@endsection