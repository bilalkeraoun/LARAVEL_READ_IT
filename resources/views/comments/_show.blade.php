<li class="comment">
    <div class="comment-body">
    <h3>{{ $comment->pseudo }}</h3>
    <div class="meta mb-3">
        {{ $comment->created_at->format('M d, Y \a\t h:m') }}
    </div>
    <p>{{ $comment->content }}</p>
    </div>
</li>