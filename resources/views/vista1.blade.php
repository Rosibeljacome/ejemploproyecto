@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <b> <center> MUSICA </b> <center> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                   
                    <div> <center> <b> Qué es la música </b> <center> </div>
                    <br>
                    
                    
Se conoce como música a la combinación ordenada de ritmo, melodía y armonía que resulta agradable a los oídos. Por su carácter inmaterial, la música se considera un arte temporal o del tiempo, al igual que la literatura. <br><br>

En el sentido restrictivo, la música es el arte de coordinar y transmitir efectos sonoros, armoniosos y estéticamente válidos, los cuales son generados a través de la voz o de instrumentos musicales. <br><br>

La música es una manifestación artística y cultural de los pueblos, de manera que adquiere diversas formas, valores estéticos y funciones según su contexto. A la vez, es uno de los medios por el cual un individuo expresa sus sentimientos.<br><br>

La persona que pone en práctica la música o la ejecuta por medio de un instrumento se llama músico.<br><br>

Como tal, la palabra música puede usarse en sentido metafórico. Por ejemplo, puede ser empleada en frases coloquiales como:<br><br>

“Vete con esa música a otra parte”, que quiere decir que la persona despide vehementemente a alguien que la ha importunado.<br><br>
“Lo que dices es música para mis oídos”, que quiere decir que la persona escucha una noticia que le resulta 'agradable de oír'.<br><br>
<br>
                    <hr>
<div> <center> <b> Tipos de música</b> <center> </div>

                    <br>

                    Existen muchas formas de clasificar la música, ya que se trata de un arte milenaria y de historia vasta y compleja. Sin embargo, a simple vista es posible discernir entre:<br><br>

<b>Música popular.</b> Este término se refiere usualmente a las manifestaciones musicales provenientes del pueblo llano, es decir, del folklore, la tradición y en ocasiones, la protesta. Se caracteriza por transmitirse de generación en generación y no siempre tener un autor determinado. Suelen tener profundos vínculos con la historia local y a menudo va acompañada de baile o danza.<br><br>
<b>Música académica.</b>  Diametralmente opuesta de la música popular, la música académica o “clásica” es la que proviene de una tradición cultural más elitista, europea y clasicista, ya sea que provenga de los grandes compositores medievales, o bien de los estudiosos y compositores vanguardistas de la música. No siempre tiene un gran público, pero sí una importante valoración dentro de la cultura.<br><br>
<b>Música comercial.</b> Se llama así a la música consumida por el gran público de manera recreativa, y que impulsa mayormente la industria discográfica o musical del mundo entero. Abarca diversos géneros y por lo general es tenida en poca estima por la academia, aunque dichos criterios de elitismo musical siempre son cuestionables.<br><br>
<b>Música ceremonial.</b> En este caso, hablamos de la música que se utiliza para marcar celebraciones, rituales u ocasiones especiales, sin importar su autoría ni otros detalles, como es el caso de la marcha nupcial, la marcha fúnebre, la marcha presidencial de un país, etc.<br><br>
<b>Música publicitaria.</b> Aquella que acompaña a la publicidad o que sirve de cortina a programas televisivos o shows radiales. Suele ser anónima y formar parte del patrimonio de una empresa o de los productores del show. No suele ser considerada música artística en absoluto.<br><br>
<br>
                    <hr>
<div> <center> <b> Géneros musicales </b> <center> </div>

                    <br>
 
                    Los géneros musicales son clasificaciones más o menos estrictas que sirven para orientarnos a la hora de elegir música, especialmente en ámbitos comerciales o estaciones de radio. Se distinguen entre sí por el uso de algunos instrumentos, por ciertas tendencias estéticas o por cierto contenido histórico que las acompaña.<br><br>

Actualmente existen muchos y muy variados géneros musicales. Una lista resumida de los más célebres géneros musicales del momento incluye:<br><br>

<b>Música Pop.</b> Su nombre proviene de “popular”, en el sentido de “famoso” y no de “tradicional”, y se trata de un género muy comercial de música bailable, en el que se da prioridad a la voz cantante y se acompaña con patrones rítmicos sencillos. Nació en Estados Unidos en la década de 1960 y desde entonces ha dominado las listas de ventas en el mundo entero.<br><br>
<b>El blues.</b> Originalmente consistía en un hombre a solas cantando acompañado con un banjo o una guitarra, allá en el siglo XIX, pero a mediados del siglo XX se reinventó en el Reino Unido y en otros países, siguiendo un patrón repetitivo en una estructura de doce compases. Su nombre significa “melancolía” o “tristeza” y muchos de sus mayores exponentes eran norteamericanos de raza negra.<br><br>
<b>El rap.</b> Otra invención estadounidense, esta vez de a principios de 1970, se trata de un género que combina rima, habla rítmica y jerga, esta última sobre todo de los barrios pobres negros estadounidenses. Vinculada con ciertas tradiciones orales africanas, el rap emplea patrones rítmicos muy pronunciados y monótonos (el beat).<br><br>
<b>El rock.</b> Término empleado para agrupar un conjunto de subgéneros musicales derivados del Rock n’ roll estadounidense de los años 60. Su instrumento de mayor protagonismo es la guitarra eléctrica, acompañada de bajo, batería y otros instrumentos.<br><br>



</div>
            </div>
        </div>
    </div>
</div>
@endsection
