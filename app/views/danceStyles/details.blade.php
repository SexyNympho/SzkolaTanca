@extends('danceStyles/layout')

@section('content')
    <article>
        <h1>{{ $danceStyle->name }}</h1>
        <p>{{ $danceStyle->description }}</p>
    </article>
@stop

@section('admin')
    {{ link_to_action('DanceStyleController@Update', 'edit', array('danceStyle' => $danceStyle->id)) }}<br/>
    {{ link_to_action('DanceStyleController@Delete', 'delete', array('danceStyle' => $danceStyle->id)) }}
@stop