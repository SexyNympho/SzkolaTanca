@extends('layout')

@section('content')
    @foreach($allNews as $singleNews)
        @include('home/shortNews', array('news' => $singleNews))
    @endforeach
@stop