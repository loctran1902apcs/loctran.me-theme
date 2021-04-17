@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <section class="text-gray-600 body-font">
    <div class="pt-5 pb-5">
    @while (have_posts()) @php the_post() @endphp
      @include('partials.components.card')
    @endwhile
    </div>
  </section>

  {!! get_the_posts_navigation() !!}
@endsection
