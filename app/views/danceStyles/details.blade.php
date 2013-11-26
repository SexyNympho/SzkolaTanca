@extends('danceStyles/layout')

@section('content')
    <article>
        <h1>{{ $danceStyle->name }}</h1>
        <p>{{ $danceStyle->description }}</p>
        <div class="photoGrid">
            @foreach($danceStyle->photos()->take(4)->get() as $photo)
                @include('images/colorboxImage', array('photo' => $photo))
            @endforeach
        </div>
    </article>
@stop

@section('admin')    
    {{ link_to_action('DanceStyleController@Update', 'edit', array('danceStyle' => $danceStyle->id)) }}
    {{ link_to_action('DanceStyleController@Delete', 'delete', array('danceStyle' => $danceStyle->id)) }}
@stop