<nav class="group">
{{ 
    link_to_route(
        'calendarMonth', 
        'poprzedni', 
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
        'następny', 
        array(
            'year' => $nextCalendarData['year'], 
            'month' => $nextCalendarData['month']
        ),
        array('id' => 'nextMonth')
    ) 
}}
</nav>