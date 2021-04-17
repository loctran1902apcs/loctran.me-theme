@extends('layouts.app')

@section('content')
  <section class="text-gray-600 body-font">
  <h1 class="text-gray-900 dark:text-gray-100">✋ Hello there!</h1>
  </section>

  {!! get_the_posts_navigation() !!}
@endsection
