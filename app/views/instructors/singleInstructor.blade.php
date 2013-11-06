@extends('instructors/layout')

@section('content')
<article>
    <h1>{{ $instructor->name }} {{ $instructor->surname }}</h1>
    <p>
        {{ $instructor->description }}
    </p>
</article>
@stop