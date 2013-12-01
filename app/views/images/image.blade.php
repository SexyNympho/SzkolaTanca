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
    @if (!is_null($photo))
        <img src="{{ route('thumbnail', array('image' => $photo->id, 'width' => $width, 'height' => $height)) }}"/>
    @else
        <img src="{{ asset('images/noImageAvailable.png') }}" class="defaultImage"/>
    @endif
    @if (isset($caption) && !is_null($caption))
    <figcaption>
        {{ $caption }}
    </figcaption>
    @endif
</figure>