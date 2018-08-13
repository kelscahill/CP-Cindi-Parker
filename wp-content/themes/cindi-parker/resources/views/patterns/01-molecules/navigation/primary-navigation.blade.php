@if (has_nav_menu('primary_navigation'))
  <nav class="c-primary-nav" role="navigation">
    @php
      $menu_name = 'primary_navigation';
      $menu_locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object( $menu_locations[ $menu_name ] );
      $primary_nav = wp_get_nav_menu_items( $menu->term_id);
      $count = 0;
      $submenu = false;
    @endphp
    <div class="c-primary-nav__toggle js-toggle u-icon u-icon__menu" data-toggled="c-primary-nav__list" data-prefix="this">
      <span class="u-icon__menu--span u-icon__menu--span-1"></span>
      <span class="u-icon__menu--span u-icon__menu--span-2"></span>
      <span class="u-icon__menu--span u-icon__menu--span-3"></span>
    </div>
    <ul class="c-primary-nav__list js-this">
      @php
        $primary_nav = json_decode(json_encode($primary_nav), true);
      @endphp
      @foreach ($primary_nav as $nav)
        @if (isset($primary_nav[$count + 1]))
          @php
            $parent = $primary_nav[$count + 1]['menu_item_parent'];
          @endphp
        @endif
        @if (!$nav['menu_item_parent'])
          @php($parent_id = $nav['ID'])
          <li class="c-primary-nav__list-item has-subnav">
            <a href="{{ $nav['url'] }}" class="c-primary-nav__link u-font--primary-nav {{ $nav['classes'][0] }}">{{ $nav['title'] }}</a>
        @endif
        @if ($parent_id == $nav['menu_item_parent'])
          @if (!$submenu)
            @php($submenu = true)
            <span class="c-subnav__arrow o-arrow--down"></span>
            <ul class="c-primary-nav__subnav c-subnav">
          @endif
            <li class="c-primary-nav__subnav__list-item c-subnav__list-item">
              <a class="c-primary-nav__subnav__link c-subnav__link" href="{{ $nav['url'] }}">{{ $nav['title'] }}</a>
            </li>
            @if ($parent != $parent_id && $submenu)
              </ul> <!-- /.c-primary-nav__subnav -->
              @php($submenu = false)
            @endif
        @endif
        @if ($parent != $parent_id)
          </li>
          @php($submenu = false)
        @endif
        @php($count++)
      @endforeach
      @php(wp_reset_postdata())
      <li class="c-primary-nav__list-item">
        <div class="js-toggle o-button" data-toggled="c-modal" data-prefix="this">
          Join the Waitlist
        </div>
      </li>
      <li class="c-primary-nav__list-item">
        <a class="u-space--right" target="_blank" href="https://www.facebook.com/mscindiparker/">
          <span class="u-icon u-icon--s u-path-fill--black">
            @include('patterns.00-atoms.icons.icon-facebook')
          </span>
        </a>
        <a target="_blank" href="https://www.instagram.com/mscindiparker/">
          <span class="u-icon u-icon--s u-path-fill--black">
            @include('patterns.00-atoms.icons.icon-instagram')
          </span>
        </a>
      </li>
    </ul> <!-- /.c-primary-nav__list -->
  </nav> <!-- /.c-primary-nav -->
@endif
