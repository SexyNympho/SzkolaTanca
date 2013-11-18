<?php
    $var = isset($class) && is_a($class, 'DanceClass');
    $attributes = '';
    if ($var)
    {
        $attributes = "rowspan={$class->duration} style=\"background-color:green;\"";
}
?>
<td {{ $attributes }} class="danceClass">
    <p>
<?php
if ($var)
{
    $ds = $class->danceStyle;
    if ($ds !== null)
    {
        echo $ds->name;
    }
}
?>
    </p>
    <p>
<?php
if ($var)
{
    echo $class->level;
}
?>
</p>
<p>
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
</p>
</td>