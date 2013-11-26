<?php
    if (!isset($width))
    {
        $width = 200;
    }
    if (!isset($height))
    {
        $height = 150;
    }
    if (!isset($caption))
    {
        $caption = null;
    }
?>
<a class="colorbox cboxElement" href="{{ asset($photo->Path()) }}">
    @include('images/image', array('photo' => $photo, 'caption' => $caption, 'width' => $width, 'height' => $height))
</a>