@extends('layout')

@section('content')
@if (isset($message))
<p>{{ $message }}</p>
@endif
<p>A day before the {{ $reminder->danceEvent()->eventDate }} we will send you a reminder message to:</p>
<p>{{ $reminder->email }}</p>
    
@stop