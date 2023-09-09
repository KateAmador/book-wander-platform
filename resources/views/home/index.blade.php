@extends('layouts.app-master')

@section('content')
<h1 class="container text-center mt-5" style="color: #15326C;">Lista de Libros</h1>

<div class="container mt-5">
    <div class="row">
        @foreach($books as $book)
        <div class="col-md-3">
            <div class="card mb-5">
            <img src="{{ asset('storage/uploads/' . $book->image_path) }}" class="card-img-top" alt="Imagen del libro" style="width: 100%; height: auto;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">{{ $book->author }}</p>
                    <p class="card-text">Condición: {{ $book->condition }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
