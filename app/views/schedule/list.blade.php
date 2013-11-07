@extends('schedule/layout')

@section('content')
<table>
@foreach($classList as $class)
    <tr>
        <td>{{ $class->weekDay }}</td>
        <td>{{ $class->classDate }}</td>
        <td>{{ $class->danceStyle->name }}</td>
        <td>{{ $class->instructor->name }}</td>
        @if (Auth::check())
        <td>{{ link_to_action('ScheduleController@Edit', 'Edit', array('danceClass' => $class->id), array()) }}</td>
        <td>{{ link_to_action('ScheduleController@Delete', 'Delete', array('danceClass' => $class->id), array()) }}</td>
        @endif
    </tr>
@endforeach
</table>
@stop

@section('admin')
    {{ link_to_action('ScheduleController@Create', 'New dance class', array(), array()) }}
@stop