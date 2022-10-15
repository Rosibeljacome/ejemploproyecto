@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('LIBROS') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>
                   
                    <div> <center> <b>Que son los libros</b> <center> </div>
                    <br>
                    
                    
                    Un libro es una obra compuesta por un conjunto de hojas de papel o de otro material, encuadernadas y protegidas con una tapa o cubierta, que forman un volumen. La palabra, como tal, proviene del latín liber, libri.

Los libros, para ser considerados como tales, deben poseer por lo menos 49 páginas, pues de lo contrario, si posee menos de 48 y más de cinco, será tenido por folleto, mientras que si tiene menos de cinco se le considerará hojas sueltas.

A lo largo de la historia, los libros han pasado de ser pergaminos manuscritos o pintados, a ser volúmenes impresos gracias a la invención de la imprenta por Johannes Gutenberg, alrededor de 1440.

Actualmente, además, el libro está experimentando una revolución en el paso al formato digital, lo que hoy se conoce como libro electrónico, o en su adaptación al formato sonoro, cuando se trata de audiolibros para no videntes.

Los libros pueden tratar sobre cualquier tema o materia: ciencia, literatura, ficción, lengua, biografía, etc., o tener diferentes propósitos, así, puede haber libros de estudio o de texto, de referencia o consulta, de contabilidad o de estilo, entre otros.

En este sentido, el libro ha sido para la humanidad sumamente importante, pues es el instrumento por excelencia para preservar y trasmitir conocimientos, creencias y cultura, tanto a través del tiempo como del espacio.

Por su parte, como libro también se denomina una obra de gran extensión publicada por volúmenes o tomos. Asimismo, puede designarse como libro cada una de las partes en que se divide una obra, aun estando en el mismo volumen, como ocurre, por ejemplo, con la Biblia.
                    <hr>
<div> <center> <b>Partes de libros </b> <center> </div>

Los libros están conformados por distintas partes, cada una de las cuales tiene un propósito y una función diferente, bien de tipo informativo o práctico, o dentro de la misma obra. Algunas de ellas, como las de tipo decorativo, pueden ser prescindibles, por lo tanto, no siempre tienen los libros las mismas partes.

Sobrecubierta: es un envoltorio de papel o cartulina que protege la cubierta del libro. No todos los libros la tienen.
Cubierta: constituye el aspecto externo del libro, se extiende por la cubierta, el lomo y la contracubierta.
Lomo: en él se ponen los datos de título, número o tomo, autor y logotipo de la editorial.
Guardas: son las hojas que unen las tapas con el resto del libro.
Hojas de cortesía o de respeto: son hojas en blanco que se encuentran al principio y al final del libro.
Anteportada o portadilla: está antes de la portada; en ella va el título del libro.
Contraportada: es la página par posterior a la portadilla, que generalmente está en blanco.
Página de derechos de propiedad o de créditos: está al reverso de la portada; en ella van contenidos los datos de propiedad literaria o copyright, editor, fechas de las ediciones, reimpresiones, depósito legal, título original (para traducciones), créditos, etc.
Portada: es donde se encuentran los datos del libro, como título y nombre del autor.
Página: cada una de las hojas, con anverso y reverso, que se encuentran numeradas.
Cuerpo de la obra: conjunto de las hojas que constituyen el texto de la obra en sí. La obra, a su vez, puede contener todas o algunas de las siguientes partes: presentación, dedicatoria, epígrafe, prólogo o introducción, índice, capítulos o partes, bibliografía, colofón y epílogo.
Biografía: en ocasiones se destina una página del libro para la biografía del autor.
Funda externa: forro que se pone a algunos libros para conservarlos.
<div> <center> <b>Libro electrónico (ebook)</b> <center> </div>

                    <br>
 
                    El libro electrónico, también conocido como ebook o libro digital, es un libro que se encuentra en formato digital. Como tal, es una versión electrónica del libro en papel, con la salvedad de que para ser leído se necesita un dispositivo electrónico.


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
