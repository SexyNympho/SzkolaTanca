@extends('schedule/layout')

@section('content')
{{ Form::model($danceClass, array('action' => $formActionArray)) }}
    <p>{{ Form::label('level', "Poziom zaawansowania") }}: {{ Form::text('level') }}</p>
    <p>{{ Form::label('classDate', "Godzina hh:mm:ss") }}: {{ Form::text('classDate') }}</p>
    <p>{{ Form::label('weekDay', "Dzień tygodnia") }}: {{ Form::select('weekDay', array(1 => 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'), $danceClass->weekDay) }}</p>
    <p>{{ Form::label('instructor_id', "Instruktor(ka)") }}: {{ Form::select('instructor_id', $instructors) }}</p>
    <p>{{ Form::label('dance_style_id', "Styl") }}: {{ Form::select('dance_style_id', $styles) }}</p>
    <p>{{ Form::label('duration', "Czas trwania") }}: {{ Form::select('duration', array(1 => 1, 2 => 2)) }}</p>
    <p>{{ Form::submit("submit") }}</p>
{{ Form::close() }}

{{ link_to_action('ScheduleController@Admin', 'Back to list', array(), array()) }}
@stop