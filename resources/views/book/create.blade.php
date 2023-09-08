@auth
@extends('layouts.book-master')

@section('template_title')
{{ __('Publicar') }} Libro
@endsection

@section('content')
<section class="content container-fluid">

    @if ($message = Session::get('success'))
    <div class="alert alert-success text-center col-md-4 mx-auto my-5">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="container-title">
                <h1 class="title text-center mt-5">{{ __('Publicar') }} Libro</h1>
            </div>
            <div class="container-body mt-5 p-4">

                <form method="POST" action="{{ route('books.store') }}" role="form" enctype="multipart/form-data">
                    @csrf

                    @include('book.form')

                </form>
            </div>

        </div>
    </div>
</section>
@include('layouts.partials.footer')
@endsection
@endauth
