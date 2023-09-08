@extends('layouts.book-master')

@section('template_title')
    {{ $book->name ?? "{{ __('Show') Book" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Book</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('books.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $book->title }}
                        </div>
                        <div class="form-group">
                            <strong>Author:</strong>
                            {{ $book->author }}
                        </div>
                        <div class="form-group">
                            <strong>Condition:</strong>
                            {{ $book->condition }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $book->status }}
                        </div>
                        <div class="form-group">
                            <strong>Image Path:</strong>
                            {{ $book->image_path }}
                        </div>
                        <div class="form-group">
                            <strong>Owner Id:</strong>
                            {{ $book->owner_id }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $book->category_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
