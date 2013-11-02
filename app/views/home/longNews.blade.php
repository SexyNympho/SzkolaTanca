@extends('home/newsView')

@section('newsText')
<p> {{ $news->newsText }} </p>
@overwrite