<div class="about-author d-flex p-4 bg-light">
    <div class="bio mr-5">
      <img src="{{ asset('assets/images/' . $post->author->image) }}" alt="Image placeholder" class="img-fluid mb-4">
    </div>
    <div class="desc">
     <h3> 
       {{ $post->author->firstname }} {{ $post->author->lastname }}
       [ {{ count($post->author->posts) }} posts]
    </h3>
     <p> 
       {{ $post->author->biography }} 
     </p>
    </div>
</div>

