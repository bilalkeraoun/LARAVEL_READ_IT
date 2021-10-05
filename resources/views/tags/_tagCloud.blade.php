    <div class="sidebar-box ftco-animate">
        <h3>Tag Cloud</h3>
        <div class="tagcloud">
          @foreach($tags as $tag)
            <a href="#" class="tag-cloud-link">{{ ($tag->name) }}</a>
          @endforeach
        </div>
    </div>

