@extends('instructors/layout')

@section('content')
<article>
    <h1>{{ $instructor->name }} {{ $instructor->surname }}</h1>
    @if ($instructor->photo != null)
    <p><img src="{{ route('thumbnail', array('image' => $instructor->photo->id, 'width' => 100, 'height' => 80)) }}"/></p>
    @endif
    <p>
        {{ $instructor->description }}
    </p>
</article>
@stop

@section('admin')
    {{ link_to_route('instructorUpdate', 'Edit', array('instructor' => $instructor->id)) }}
    {{ link_to_action('InstructorController@Delete', 'Delete', array('instructor' => $instructor->id)) }}
@stop