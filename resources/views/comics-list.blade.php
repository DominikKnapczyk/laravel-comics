@extends('layouts.app')

@section('title', 'Comics list')
  
@section('content')
  <section>
    <div class="container">
      <div class="row">
        @forelse ($comics as $comic)
         <div class="col-3">
          <div class="card h-100" style="width: 18rem;">
            <div class="card-body d-flex flex-column">
              <h4 class="card-title">{{ $comic['title'] }}</h4>
              <h5 class="card-subtitle mb-2 text-body-secondary">{{ $comic['author'] }}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{ $comic['genre'] }}</h6>
              <p class="card-text">{{ $comic['description'] }}</p>
              <a href="#" class="card-link mt-auto">Card link</a>
            </div>
          </div>
         </div>
        @empty
          <div class="col-12">
            <h2>0 COMICS</h2>
          </div>
        @endforelse
     </div>
    </div>
  </section>
@endsection