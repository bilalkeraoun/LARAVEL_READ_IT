<div class="comment-form-wrap pt-5">
    <h3 class="mb-5">Leave a comment</h3>
    <form action="{{ route('ajax.comments.add') }}" class="p-5 bg-light" method="post" id="addComment">
      <div class="form-group">
        <label for="pseudo">Pseudo *</label>
        <input type="text" class="form-control" id="pseudo">
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <input type="hidden" name="postId"  id="postID" value="{{ $post->id }}" />
        <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
      </div>
    </form>
</div>