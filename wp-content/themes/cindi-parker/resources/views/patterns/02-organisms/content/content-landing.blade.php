<section class="c-section">
  <div class="l-grid l-grid--2up--flex">
    <div class="l-grid-item">
      @php($gallery = get_field('gallery'))
      @if ($gallery)
        <div class="c-gallery js-slick js-slick--gallery">
          @foreach ($gallery as $image)
            <div class="c-gallery__image o-background-image--{{ $image['ID'] }}">
              <style>
                .o-background-image--{{ $image['ID'] }} {
                  background-image: url({{ $image['sizes']['flex-height--m'] }});
                }
                @media (min-width: 700px) {
                  .o-background-image--{{ $image['ID'] }} {
                    background-image: url({{ $image['sizes']['flex-height--l'] }});
                  }
                }
                @media (min-width: 1100px) {
                  .o-background-image--{{ $image['ID'] }} {
                    background-image: url({{ $image['sizes']['flex-height--xl'] }});
                  }
                }
              </style>
            </div>
          @endforeach
        </div>
      @endif
    </div>
    <div class="l-grid-item">
      <article @php(post_class('c-article l-container l-container--s'))>
        <div class="c-article__body u-spacing">
          <h1 class="u-color--secondary">{{ the_field('kicker') }}</h1>
          <h2>{{ the_field('display_title') }}</h2>
          {{ the_content() }}
          <span class="c-logo u-path-fill--black">@include('patterns.00-atoms.images.logo')</span>
        </div>
      </article>
    </div>
  </div>
  <a href="#" class="js-toggle o-button o-button--fixed" data-toggled="c-modal" data-prefix="this">
    <em>Full website coming soon</em>
    <span>Join the Waitlist</span>
  </a>
</section>
