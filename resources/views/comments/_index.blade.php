<div class="pt-5 mt-5">
    <h3 class="mb-5">{{ count($comments) }} Comments</h3>
    <ul class="comment-list">
        @foreach($comments as $comment)
          @include('comments._show', ['comment' => $comment])
        @endforeach
    </ul>
    <!-- END comment-list -->
</div>