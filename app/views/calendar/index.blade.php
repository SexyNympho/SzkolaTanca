@extends('layout')

<?php
    $daysCount = 1;
?>

@section('content')
<table id="calendar">
    @foreach($calendarArray as $day)
        @if ($daysCount % 7 == 1)
            <tr>
        @endif
        
        <td @if($day['current']) class="currentMonth" @endif>
            <div>{{ $day['cal'] }}</div>
            @include('calendar/calendarDay', array('events' => $day['events']))
        </td>
        @if ($daysCount % 7 == 0)
            </tr>
        @endif
        <?php ++$daysCount; ?>
    @endforeach
</table>
@stop