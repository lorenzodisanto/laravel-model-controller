@extends('layouts.app')

@section('title', 'Movies')
    

@section('main-content')
    <div class="container py-4">
        <h2 class="text-center ">Movies</h2>
      <div class="row g-4 mt-2">
        @forelse ($movies as $movie)
            <div class="col-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4>{{$movie->title}}</h4>
                        <a href="{{ route('movies.show', [
                            'id' => $movie->id,
                        ]) }}">Info</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <h3>Non ci sono Movies</h3>
            </div>
        @endforelse
      </div>
    </div>
@endsection