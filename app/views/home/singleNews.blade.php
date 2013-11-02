@extends('layout')

@section('content')
    @include('home/longNews', array('news' => $news))
@endsection