@extends('layouts.app')
@section('content')
  <header class="c-page-header">
    <h1>Page not found</h1>
  </header> <!-- /.c-page-header-->
  <article @php(post_class('c-article l-container l-container--m'))>
    <div class="c-article__body u-spacing">
      <p>{{ __('Sorry, no results were found.', 'sage') }}</p>
      <a href="/" class="o-button">Go to homepage</a>
    </div>
  </article>
@endsection
