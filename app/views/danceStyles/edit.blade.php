@extends('danceStyles/layout')

@section('content')
    {{ Form::model($danceStyle, array('action' => array('DanceStyleController@Persist', 'danceStyle' => $danceStyle->id))) }}
    <p>{{ Form::label('name', 'Name') }}: {{ Form::text('name') }}</p>
    <p>{{ Form::label('description', 'Description') }}: {{ Form::textarea('description') }}</p>
    <p>{{ Form::submit('submit') }}</p>
    {{ Form::close() }}
@stop