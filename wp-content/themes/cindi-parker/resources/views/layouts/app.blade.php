<!doctype html>
<html @php(language_attributes())>
  @include('patterns.02-organisms.global.head')
  <body @php(body_class())>
    <div class="l-wrap" role="document">
      @php(do_action('get_header'))
      @include('patterns.02-organisms.global.header')
      <main class="l-main" role="main">
        @yield('content')
      </main> <!-- /.l-main -->
      @php(do_action('get_footer'))
      @include('patterns.02-organisms.global.footer')
      @php(wp_footer())
      </div> <!-- /.l-content -->
  </body>
</html>
