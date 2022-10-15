@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b><center> JARDÍN </b><center> </div></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>jardín es un término de origen francés que hace referencia al terreno donde se cultivan plantas con fines decorativos y ornamentales. Se trata de un huerto de flores que busca embellecer un determinado lugar. Por ejemplo: “Quiero plantar jazmines en mi jardín”, “Mi abuela tiene un hermoso jardín con flores de todos los colores”.

<br><br>JardínSe conoce como jardinería a la disciplina dedicada al desarrollo de estos espacios que se encuentran en muchas casas o en terrenos públicos. Es posible distinguir entre diversos tipos de jardín según sus funciones o finalidades.

<br><br>Entre los jardines más importantes del mundo tendríamos que subrayar la existencia de los Jardines Colgantes de Babilonia, del siglo VI a.C, que están considerados como una de las Siete Maravillas de lo que fue el mundo antiguo. Se encontraban situados junto a lo que era el Palacio del Rey y fueron destruidos en el año 125 a.C por el monarca Evernero.

<br><br>El jardín japonés, oriundo de Japón, invita a la contemplación y a la relajación. Incluye, además de plantas, estanques con agua y peces, rocas y otros elementos que suelen tener significados simbólicos.

<br><br>Una modalidad de los jardines japoneses son los jardines zen, compuestos por arena, grava e hierbas que ayudan a la meditación de los monjes.

<br><br>Además también nos encontramos con los jardines tropicales que, como su propio nombre indica, se identifican por el hecho de que están conformados por plantas tropicales. Por ello necesitan mucha luz, fertilizantes y una cantidad importante de agua, ya sea mediante lluvias o riego.

<br><br>El jardín aromático es aquel que busca perfumar el ambiente. Surgió en el Antiguo Egipto con plantas como la mirra y el incienso. Los jardines botánicos, por otra parte, son lugares creados por diversos organismos (públicos o privados) para estudiar, conservar y divulgar la diversidad vegetal.

<br><br>Los jardines acuáticos, los silvestres, los islámicos o los ingleses son otros tipos también especialmente interesantes y singulares.

<br><br>Además tenemos que subrayar la existencia de lo que se denomina ciudad jardín. En concreto esta es el conjunto de casas de tipo familiar que existen en una urbe y que cuentan con un jardín.

<br><br>En concreto, en Córdoba, en España, hay un barrio que se llama Ciudad Jardín. Recibe su nombre porque al proyectarse se establecieron un sinfín de parques y jardines en él. Se sitúa en la zona del Poniente Sur y limita al norte con la conocida Avenida de Medina Azahara.

<br><br>En algunos países, se denomina jardín de infantes a los establecimientos dedicados a brindar servicios de educación preescolar: “Mi hijo cumplió tres años y está por empezar el jardín de infantes”, “Voy a trabajar como maestra en una jardín de infantes”.

<br><br>De la misma forma tampoco podemos pasar por alto la expresión coloquial “meterse en un jardín”. La misma es una locución verbal que se emplea para dejar patente que una persona en cuestión se ha enredado de forma innecesaria en una situación muy complicada.

<br><br>En el béisbol, por último, el jardín u outfield es el terreno de juego que está más allá del área delimitada por el cuadro interior (infield).<br>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
