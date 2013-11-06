@extends('instructors/layout')

@section('content')
<article>
    <h1>{{ $instructor->name }} {{ $instructor->surname }}</h1>
    <p>
        {{ $instructor->description }}
    </p>
</article>
@stop

@section('admin')
<ul>
    <li>{{ link_to_action('InstructorController@Update', 'Edit', array('instructor' => $instructor->id)) }}</li>
    <li>{{ link_to_action('InstructorController@Delete', 'Delete', array('instructor' => $instructor->id)) }}</li>
</ul>
@stop