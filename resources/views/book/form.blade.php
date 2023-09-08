<div class="container mt-4">
    <form method="POST" action="{{ route('books.store') }}" role="form" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-4">
                <div class="form-group mt-5">
                    {{ Form::label('title', 'Titulo') }}
                    {{ Form::text('title', $book->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mt-5">
                    {{ Form::label('author', 'Autor') }}
                    {{ Form::text('author', $book->author, ['class' => 'form-control' . ($errors->has('author') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    {!! $errors->first('author', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mt-5">
                    {{ Form::label('condition', 'Condición') }}
                    {{ Form::select('condition', ['1/5' => '1/5', '2/5' => '2/5', '3/5' => '3/5', '4/5' => '4/5', '5/5' => '5/5'], $book->condition, ['class' => 'form-control' . ($errors->has('condition') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona la condición']) }}
                    {!! $errors->first('condition', '<div class="invalid-feedback">:message</div>') !!}
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group mt-4">
                    {{ Form::label('category_id', 'Categoría') }}
                    {{ Form::select('category_id', $categories->pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Selecciona una categoria']) }}
                    {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mt-4">
                    {{ Form::label('image_path', 'Cargar imagen') }}
                    {{ Form::file('image_path', ['class' => 'form-control-file' . ($errors->has('image_path') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('image_path', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">{{ __('Publicar') }}</button>
            </div>
        </div>


    </form>
</div>
