@extends('layouts.app')

@section('content')

<!-- masonry
================================================== -->
<section id="bricks">

<div class="row masonry">

    <!-- brick-wrapper -->
     <div class="bricks-wrapper">

        <div class="grid-sizer"></div>

            @if ($blogs)
              @foreach ($blogs as $blog)
     
              <article class="brick entry format-standard animate-this">

              <div class="entry-thumb">
                <a href="/blog/{{ $blog->slug }}" class="thumb-link">
                <img src="images/{{ $blog->image }}">             
                </a>
              </div>

              <div class="entry-text">
                <div class="entry-header">
                  <div class="entry-meta">
                    <span class="cat-links">
                      {{ $blog->category->name }}                 
                    </span>         
                  </div>
                  <h1 class="entry-title"><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a></h1>
                </div>
                <div class="entry-excerpt">
                  <p>{{ substr(strip_tags($blog->body), 0, 100) }}{{ strlen(strip_tags($blog->body)) > 100 ? '...' : "" }}</p>
                </div>
              </div>

              </article> <!-- end article -->

              @endforeach
            @endif


     </div> <!-- end brick-wrapper --> 

</div> <!-- end row -->

<div class="row">
  <nav class="pagination">
      {{ $blogs->links() }}
  </nav>
</div>

</section> <!-- end bricks -->

@stop

@section('scripts')
<script type="text/javascript">
</script>
@stop