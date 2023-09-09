@auth
@extends('layouts.book-master')

@section('template_title')
{{ __('Publicar') }} Libro
@endsection

@section('content')
<section class="content container-fluid col-12">

    @if ($message = Session::get('success'))
    <div class="alert alert-success text-center col-sm-12 mx-auto">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="container-title">
                <h1 class="title text-center mt-5">{{ __('Publicar') }} Libro</h1>
            </div>
            <div class="container-body">

                <form method="POST" action="{{ route('books.store') }}" role="form" enctype="multipart/form-data">
                    @csrf

                    @include('book.form')

                </form>
            </div>

        </div>
    </div>
</section>
@endsection

@endauth

