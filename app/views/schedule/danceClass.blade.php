<?php
    $var = isset($class) && is_a($class, 'DanceClass');
    $attributes = '';
    if ($var)
    {
        $attributes = "rowspan={$class->duration} style=\"background-color:green;\"";
}
?>
<td {{ $attributes }} >
<?php
if ($var)
{
    $ds = $class->instructor;
    if ($ds !== null)
    {
        echo $ds->name;
    }
}
?>
</td>