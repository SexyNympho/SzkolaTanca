<?php
    $comment = new Comment();
?>
<div id="commentForm">
{{ Form::open(array('route' => array('postCreateComment', 'vm' => 'Comment', 'news' => $news->id))) }}
    {{ Form::hidden('userId', Auth::user()->id) }}
    <p>{{ Form::textarea('content') }}</p>
    <p>{{ Form::submit('submit') }}</p>
{{ Form::close() }}
</div>