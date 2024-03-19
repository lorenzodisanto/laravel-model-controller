@extends('layouts.app')

@section('title', 'Movies')
    

@section('main-content')
    <div class="container py-4">
        <h3 class="text-center">{{ $movie->title }}</h3>
        <div class="card h-100">
            <div class="card-body">               
                <h5>{{ $movie->original_title }}</h5>
                <ul class="p-0">
                    <li>Nazionalità: {{ $movie->nationality }}</li>
                    <li>Data di uscita: {{ $movie->date }}</li>
                    <li>Voto: {{ $movie->vote }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection