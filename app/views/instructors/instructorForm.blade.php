@extends('instructors/layout')

@section('content')
    {{ Form::model($instructor, array('action' => $actionArray)) }}
        <p>{{ Form::text('name') }}</p>
        <p>{{ Form::text('surname') }}</p>
        <p>{{ Form::textarea('description') }}</p>
        <p>{{ Form::submit('hihihaha') }}</p>
    {{ Form::close() }}
@stop