@extends('schedule/layout')

@section('content')
<table>
@foreach($classList as $class)
    <tr>
        <td>{{ $class->weekDay }}</td>
        <td>{{ $class->classDate }}</td>
        <td>{{ $class->danceStyle->name }}</td>
        <td>{{ $class->instructor->name }}</td>
        <td><a href="{{ action('ScheduleController@Edit', array('danceClass' => $class->id)) }}">Edit</a></td>
        <td>{{ link_to_action('ScheduleController@Delete', 'Delete', array('danceClass' => $class->id), array()) }}</td>
    </tr>
@endforeach
</table>

{{ link_to_action('ScheduleController@Create', 'New dance class', array(), array()) }}
@stop