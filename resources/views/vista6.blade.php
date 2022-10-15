@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PELICULAS') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>
                   
                   <div> <center> <b>Que son Peliculas</b> <center> </div>
                   <br>
                   Película es un término que proviene del latín pellicŭla y que tiene diversos usos. Su acepción más habitual está vinculada a la obra cinematográfica que suele narrar una historia escrita o adaptada por un guionista y cuya puesta en escena depende de un director.

La película puede contar con la participación de actores que interpretan a los distintos personajes de la historia o presentar dibujos animados mediante distintos tipos de técnicas. Es importante tener en cuenta que la película es la obra en sí misma, más allá de su formato y del lugar de exhibición (es decir, una película puede ser proyectada en una sala de cine o ser vista en un televisor en el hogar).

<hr>
<div> <center> <b> Tipos de peliculas</b> <center> </div>

                    <br>

                    Tipos de géneros cinematográficos
Tal y como comentábamos en la introducción de este artículo, las películas se pueden clasificar entre una gran variedad de categorías, dependiendo de los criterios que se usen. Y es que, los géneros cinematográficos no son exclusivos y, por lo tanto, una obra puede estar catalogada en dos o más géneros a la vez dependiendo de las características que se tomen en cuenta.

Por otro lado, como también ocurre en la literatura, en el cine se pueden encontrar géneros y, dentro de ellos, subgéneros. Resultando así una lista de géneros y subgéneros tan larga como variada. Veamos a continuación los 7 géneros cinematográficos que no puedes perderte.

1-. Géneros cinematográficos por estilo
¿Quién no sabe qué es una comedia romántica o un drama total? ¡Pues son ejemplos de géneros cinematográficos por estilo! Estos toman en cuenta el estilo o tono de la narrativa cinematográfica. En esta clasificación de los géneros de cine podemos encontrar:

Acción. En este género prevalecen altas dosis de adrenalina con una buena carga de movimiento, fugas, acrobacias, peleas, guerras, persecuciones y una lucha contra el mal.
Aventuras. Similares a las de acción, predominan las nuevas experiencias y situaciones.
Ciencia Ficción. Basados en fenómenos imaginarios, en la ciencia ficción son usuales los extraterrestres, sociedades inventadas, otros planetas…
Comedia. Diseñadas específicamente para provocar la risa o la alegría entre los espectadores.
No- Ficción / documental. Este género analiza un hecho o situación real sin ficcionarlo.
Drama. Los dramas se centran en desarrollar el problema o problemas entre los diferentes protagonistas. Este es quizás uno de los géneros cinematográficos más amplios de la lista. No predominan las aventuras o la acción, aunque pueden aparecer puntualmente Generalmente se basan en desarrollar la interacción y caracteres humanos.
Fantasía. En ellas se incluyen personajes irreales o totalmente inventados, inexistentes en nuestra realidad. También podemos conocer este género de cine como “fantástico”. No se basa en ideas que puedan llegar a materializarse.
Musical. Las películas que cortan su desarrollo natural con fragmentos musicales son protagonistas de este género.
Suspense. Conocido también como intriga, estas películas se desarrollan rápidamente, y todos sus elementos giran entorno un mismo elemento intrigante.
Terror. Su principal objetivo es causar miedo, horror, incomodidad o preocupación.
2-. Géneros de cine por formato
Cine Mudo. Las películas que se incluyen en este género cinematográfico no disponen de una grabación de sonido. Solamente están compuestas por imágenes.
Cinema sonoro. Al contrario que el cine mudo, en este género las películas incorporan una grabación de sonido sincronizada con las imágenes.
Cine 2D. Cine proyectado en dos dimensiones: altura y fondo.
Películas 3D. En estas películas se suma el ancho a las otras dimensiones, siendo así una película 3D.
Animación. Películas que se componen de fotogramas hechos a mano y que, pasados rápidamente uno detrás de otro, producen la ilusión de movimiento o vídeo. Pueden ser hechas a mano (tradicionalmente) o mediante ordenador.
3-. Géneros según ambientación
Religiosas. Su temática está enfocada a una religión.
Futuristas. Tienen lugar en épocas futuras, y sus personajes pueden ser realistas o ficticios.
Policíacas. Suelen tener lugar en una escena del crimen y se centran en resolverlo.
Crimen. Su foco se posa sobre la vida de los delincuentes o criminales.
Bélicas. También conocidas por centrarse en conflictos bélicos o guerras.
Históricas. Se ambientan en épocas determinadas, con recreaciones de personas, hechos, lugares o argumentos.
Deportivas.
Western. Famosas por centrarse en el territorio occidental de los Estados Unidos de América.
                    <hr>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
