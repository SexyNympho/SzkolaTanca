@extends('calendar/layout')

<?php
    $daysCount = 1;
?>

@section('content')
<h1>{{ $title }}</h1>
@include('calendar/nav', array('previousCalendarData' => $previousCalendarData, 'nextCalendarData' => $nextCalendarData))
<table id="calendar">
    @foreach($calendarArray as $day)
        @if ($daysCount % 7 == 1)
            <tr>
        @endif
        
        <td @if($day['current']) class="currentMonth" @endif>
            <div class="dayNumber">{{ $day['cal'] }}</div>
            @include('calendar/calendarDay', array('events' => $day['events']))
        </td>
        @if ($daysCount % 7 == 0)
            </tr>
        @endif
        <?php ++$daysCount; ?>
    @endforeach
</table>
@include('calendar/nav', array('previousCalendarData' => $previousCalendarData, 'nextCalendarData' => $nextCalendarData))
@stop

@section('breadcrumbs')
    @parent
    
    <li>{{ link_to_route('calendarMonth', $title, array('year' => $year, 'month' => $month)) }}</li>
@stop