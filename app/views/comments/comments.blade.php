@if (count($com) != 0)
    <h2>Komentarze</h2>
@endif
@foreach($com as $comment)
<div class="comment">
    <time>{{ $comment->created_at }}</time>
    <p>{{ $comment->content }}</p>
    <div class="commentAuthor">{{ $comment->user->login }}</div>
</div>
@endforeach