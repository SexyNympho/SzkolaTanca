<figure>
    <img src="{{ route(thumbnail, array('image' => $photo->id)) }}"/>
    @if (isset($caption))
    <figcaption>
        {{ $caption }}
    </figcaption>
    @endif
</figure>