@extends('layouts.app')
@section('content')
  @while(have_posts()) @php(the_post())
    @include('patterns.02-organisms.content.content-landing')
  @endwhile
@endsection
