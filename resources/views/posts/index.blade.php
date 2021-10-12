@extends('template.index')

@section('content')
  <div class="row d-flex" id="list">
    
    @include('posts._list')
  </div>
  <div class="row mt-5">
    <div class="col text-center">
      <div class="block-27">
        <ul>
          <li><a href="#" id="more-posts" data-url="{{ route('ajax.posts.more') }}">+</a></li>
        </ul>
      </div>
    </div>
  </div>
@stop   

@section('scripts')
  <script>

    let offset = 10;
    $('#more-posts').click(function(e) {
      e.preventDefault();
          $.get( $(this).data('url'), {offset: offset} )

            .done(function(rep) {
                $("#list").append(rep).find('.col-md-6:nth-last-of-type(-n+10)')
                .addClass('fadeInUp')
                .addClass('ftco-animated');
                offset = offset + 10;
            })
    });
      
  </script>
@stop


