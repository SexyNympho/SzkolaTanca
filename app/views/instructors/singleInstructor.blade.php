@extends('instructors/layout')

@section('content')
<article>
    <h1>{{ $instructor->name }} {{ $instructor->surname }}</h1>
    @if ($instructor->photo != null)
    <p><img src="{{ route('thumbnail', array('image' => $instructor->photo->id, 'width' => 113, 'height' => 173)) }}"/></p>
    @endif
    <p>
        {{ $instructor->description }}
    </p>
</article>
@stop

@section('admin')
<ul>
    <li>{{ link_to_route('instructorUpdate', 'Edit', array('instructor' => $instructor->id)) }}</li>
    <li>{{ link_to_action('InstructorController@Delete', 'Delete', array('instructor' => $instructor->id)) }}</li>
</ul>
@stop