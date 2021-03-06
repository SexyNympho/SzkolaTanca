@extends('schedule/layout')

@section('content')
<table id="schedule">
    <thead>
    <tr>
        @foreach($headers as $header)
        <th>{{$header}}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($rows as $row)
        <tr>
            <td>{{ $row[0] }}</td>
            @for($i = 1; $i < 8; ++$i)
                @include('schedule/danceClass', array('class' => $row[$i]))
            @endfor
        </tr>
    @endforeach
    <tr><td>.</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    </tbody>
</table>
@stop

@section('admin')
    {{ link_to_action('ScheduleController@Admin', 'manage', array()) }}
@stop