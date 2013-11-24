@extends('home/layout')

@section('content')
    @include('home/longNews', array('news' => $news))
@stop