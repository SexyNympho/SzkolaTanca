<?php
    if (!isset($width))
    {
        $width = 200;
    }
    if (!isset($height))
    {
        $height = 150;
    }
?>
<figure>
    <img src="{{ route('thumbnail', array('image' => $photo->id, 'width' => $width, 'height' => $height)) }}"/>
    @if (isset($caption))
    <figcaption>
        {{ $caption }}
    </figcaption>
    @endif
</figure>