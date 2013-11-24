@extends('calendar/layout')

<?php
    $daysCount = 1;
?>

@section('content')
<nav class="group">
{{ 
    link_to_action(
        'CalendarController@SpecificMonth', 
        'previous', 
        array(
            'year' => $previousCalendarData['year'], 
            'month' => $previousCalendarData['month']
        ),
        array('id' => 'previousMonth')
    ) 
}}
{{ 
    link_to_action(
        'CalendarController@SpecificMonth', 
        'next', 
        array(
            'year' => $nextCalendarData['year'], 
            'month' => $nextCalendarData['month']
        ),
        array('id' => 'nextMonth')
    ) 
}}
</nav>
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
@stop