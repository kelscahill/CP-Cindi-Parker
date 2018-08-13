@include('patterns.02-organisms.sections.page-header')
<article @php(post_class('c-article l-container l-container--m'))>
  <div class="c-article__body u-spacing">
    @if (have_posts())
      @while (have_posts()) @php(the_post())
      
      @endwhile
    @else
      <p>{{ __('Sorry, no results were found.', 'sage') }}</p>
      {!! get_search_form(false) !!}
    @endif
  </div>
</article>
