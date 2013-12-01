<nav class="group">
{{ 
    link_to_route(
        'calendarMonth', 
        'previous', 
        array(
            'year' => $previousCalendarData['year'],
            'month' => $previousCalendarData['month']
        ),
        array('id' => 'previousMonth')
    ) 
}}
{{ 
    link_to_route(
        'calendarMonth', 
        'next', 
        array(
            'year' => $nextCalendarData['year'], 
            'month' => $nextCalendarData['month']
        ),
        array('id' => 'nextMonth')
    ) 
}}
</nav>