@extends('layouts.app')

@section('title', 'Comics list')
  
@section('content')
  <section>
    <div class="container">
      @dump($comics)
    </div>
  </section>
@endsection