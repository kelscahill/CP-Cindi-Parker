@include('patterns.02-organisms.sections.page-header')
<article @php(post_class('c-article l-container l-container--m'))>
  <div class="c-article__body u-spacing">
    @php(the_content())
  </div>
</article>
