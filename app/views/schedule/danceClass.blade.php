<?php
    $var = isset($class) && is_a($class, 'DanceClass');
    $attributes = '';
    if ($var)
    {
        $attributes = "rowspan={$class->duration} style=\"background-color:green;\"";
    }
?>
<td {{ $attributes }} class="danceClass">
    @if ($var && !is_null($class->danceStyle))
        {{ link_to_route('danceStyle', $class->danceStyle->name, array('danceStyle' => $class->danceStyle->id)) }}
    @endif
    
    @if ($var)
        {{ $class->level }}
    @endif
    
    @if ($var && !is_null($class->instructor))
        {{ 
            link_to_route
            (
                'showInstructor', 
                $class->instructor->name . ' ' . $class->instructor->surname, 
                array('instructor' => $class->instructor->id)
            )
        }}
    @endif
</td>