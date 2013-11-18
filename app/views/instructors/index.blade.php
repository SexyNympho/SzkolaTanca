@extends('instructors/layout')

@section('content')
    <ul>
    @foreach($instructors as $instructor)
    <li>{{ link_to_action('InstructorController@Instructor', $instructor->name." ".$instructor->surname, array('instructor' => $instructor->id)) }}</li>
    @endforeach
    </ul>
@stop

@section('admin')
    {{ link_to_route('instructorCreate', 'Add instructor') }}
@stop