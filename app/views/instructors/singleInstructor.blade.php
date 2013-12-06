@extends('instructors/layout')

<?php
    $fullName = $instructor->name . ' ' . $instructor->surname;
?>
@section('content')
<article>
    <header>
        <h1>{{ $fullName }}</h1>
        <div id="instructorPhoto">
        @if ($instructor->photo != null)
            @include('images/colorboxImage', array('photo' => $instructor->photo))
        @endif
        </div>
    </header>
    <p>
        {{ $instructor->description }}
    </p>
</article>
@stop

@section('admin')
    {{ link_to_route('instructorUpdate', 'Edit', array('instructor' => $instructor->id)) }}
    {{ link_to_action('InstructorController@Delete', 'Delete', array('instructor' => $instructor->id)) }}
@stop

@section('breadcrumbs')
    @parent
    
    <li>{{ link_to_route('showInstructor', $fullName, array('instructor' => $instructor->id)) }}</li>
@stop