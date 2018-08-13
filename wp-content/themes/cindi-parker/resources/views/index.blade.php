@extends('layouts.app')
@section('content')
  @include('patterns.02-organisms.sections.page-header')
  <article @php(post_class('c-article l-container l-container--m'))>
    <div class="c-article__body u-spacing">
      @if (have_posts())
        @while (have_posts()) @php(the_post())
        @endwhile
        @php(wp_reset_query())
      @else
        <p>Sorry, there are no posts at this time.</p>
      @endif
    </div>
  </article>
@endsection
