@php
  use Roots\Sage\Titles;
  if (!is_home()) {
    global $post;
  }

  if (is_home()) {
    $display_title = 'Recent Posts';
    $title = NULL;
  } else if (is_archive()) {
    $display_title = '';
    $title = single_cat_title( '', false );
  } else {
    $display_title = get_post_meta($post->ID, 'display_title', true);
    $title = get_the_title($post->ID);
  }
@endphp
<header class="c-page-header l-container l-container--m">
  <div class="c-page-header__simple--inner u-padding">
    <h1>
      @if (!empty($display_title))
        {{ $display_title }}
      @else
        {{ $title }}
      @endif
    </h1>
  </div>
</header> <!-- /.c-page-header-->
