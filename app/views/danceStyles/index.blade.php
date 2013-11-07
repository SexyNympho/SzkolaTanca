@extends('danceStyles/layout')

@section('content')
    @foreach($danceStyles as $danceStyle)
        <p>{{ link_to_action('DanceStyleController@DanceStyle', $danceStyle->name, array('danceStyle' => $danceStyle->id)) }}</p>
    @endforeach
@stop

@section('admin')
    {{ link_to_action('DanceStyleController@Create', 'new style') }}
@stop