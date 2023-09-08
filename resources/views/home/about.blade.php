@extends('layouts.about-master')

@section('content')

<h1 class="tittle mt-5 text-center">Quienes Somos</h1>

<div class="container1 mt-5">
    <section>
        <img class="about-imagen" src="{{ url('assets/img/about1.jpg') }}" alt="libros">
    </section>

    <section class="about">
        <p>
            En <strong>Book Wander</strong>, somos un grupo apasionado de lectores ávidos y entusiastas de la tecnología que
            comparten un amor inquebrantable por los libros y el poder que tienen para conectar a las personas con mundos
            imaginarios y conocimiento infinito. Nuestra plataforma es el resultado de un sueño compartido de fomentar la
            lectura y hacer que los libros sean accesibles para todos, sin importar dónde se encuentren en el mundo. <br><br>

        <h2><strong>Misión</strong></h2><br>

        Nuestra misión es simple pero poderosa: deseamos inspirar, educar y empoderar a través de la literatura.
        Creemos en la importancia de la lectura como un medio para expandir horizontes, desafiar perspectivas y fomentar
        la empatía. Queremos hacer que la lectura sea accesible para todos, independientemente de su ubicación
        geográfica o recursos financieros. <br><br>
        </p>
    </section>
</div>

<div class="container2">
    <section class="about2">
        <p>
        <h2><strong>Lo que hacemos</strong></h2><br>

        En <strong>Book Wander</strong>, ofrecemos una plataforma virtual donde los amantes de los libros pueden conectarse, compartir
        y descubrir historias de todo el mundo. Facilitamos el intercambio de libros de manera legal y ética,
        permitiendo que los usuarios compartan sus libros favoritos con otros lectores y, al mismo tiempo, descubran
        nuevas joyas literarias. <br><br><br>

        <h2><strong>Nuestra Comunidad</strong></h2><br>

        Creemos que la lectura es una experiencia social y que los libros pueden unir a las personas de diversas culturas
        y perspectivas. Nuestra comunidad global de lectores es lo que impulsa a <strong>Book Wander</strong>, y estamos
        agradecidos por cada miembro que se une a nosotros en esta aventura literaria.
        </p>
    </section>
    <section>
        <img class="somos-imagen2" src="{{ url('assets/img/about2.webp') }}" alt="libros">
    </section>
</div>
@endsection
