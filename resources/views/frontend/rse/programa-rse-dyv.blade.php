@extends('frontend.layout')

@section('title_and_meta')
  <title>Derka y Vargas - Empresa</title>
  <meta name="description" content="">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/responsabilidad-social-empresarial" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="RSE DERKA Y VARGAS" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('styles_sheets')
<style type="text/css">
	p{
		font-size: 1.8rem;
	}
	.data-post li{
	    font-size: 18px;
	    margin: 15px 10px;
	}

/* Let's set and reset some common styles */
.mb-wrap {
	width: 300px;
	margin: 20px auto;
	padding: 20px;
	position: relative;	
}

.mb-wrap p{
	margin: 0;
	padding: 0;
}

.mb-wrap blockquote {
	margin: 0;
	padding: 0;
	position: relative;
}

.mb-wrap cite {
	font-style: normal;
}

.mb-style-3 {
	width: 100%;
}

.mb-style-3 blockquote{
	background: #fff;
	padding: 30px;
	border-radius: 5px;
	-webkit-box-shadow: 3px 3px 12px 0px rgba(55,52,53,0.9);
-moz-box-shadow: 3px 3px 12px 0px rgba(55,52,53,0.9);
box-shadow: 3px 3px 12px 0px rgba(55,52,53,0.9);
}

.mb-style-3 blockquote:after, 
.mb-style-3 blockquote:before  {
	top: 100%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
}

.mb-style-3 blockquote:after  {
	border-top-color: #ffffff;
	border-width: 20px;
	left: 65%;
	margin-left: -10px;
}

.mb-style-3 blockquote:before {
	border-top-color: rgba(0,0,0,0.01);
	border-width: 22px;
	left: 65%;
	margin-left: -11px;
}

.mb-style-3 blockquote p {
	font-family: 'Alegreya', serif;
	font-size: 24px;
	font-weight: 400;
	line-height: 40px;
	font-style: italic;
	text-indent: 100px;
	position: relative;
}
.mb-style-3 blockquote p:before{
	content: '\201C';
	font-family: serif;
	font-style: normal;
	font-weight: 700;
	position: absolute;
	font-size: 175px;
	top: 0px;
	left: -105px;
	color: #e01e37;
	text-shadow: 7px 14px 10px rgba(0, 0, 0, 0.1);
}


.mb-style-3 .mb-attribution {
    text-align: right;
    padding: 15px 10px;
    /*position: relative;*/
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.mb-style-3 .mb-thumb {
	display: block;
	width: 180px;
	height: 180px;
	border: 5px solid #fff;
	border-radius: 50%;
	background: url({{asset('/imagenes/don-vargas.jpg')}}) no-repeat center center;
	/*position: absolute;*/
	right: 10px;
	bottom: 5px;
	box-shadow: 
		inset 1px 1px 4px rgba(0,0,0,0.5),
		0 2px 3px rgba(0,0,0,0.6);
}


.mb-style-3 .mb-author{
	font-weight: 700;
	font-size: 20px;
	text-shadow: 0 1px 1px rgba(255,255,255,0.7);
}

.mb-style-3 cite a{
	font-family: 'Alegreya', serif;
	font-weight: 700;
	font-style: italic;
	color: #fff;
	text-shadow: 0 1px 1px rgba(0,0,0,0.3);
}

.mb-style-3 cite a:hover{
	color: rgba(188, 147, 200, 1);
	text-shadow: 0 1px 1px rgba(255,255,255,0.7);
}
</style>
@stop

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>PALABRAS de EDUARDO FREDY VARGAS (Presidente Derka y Vargas S.A.)</h2>
				<div class="mb-wrap mb-style-3">
					<blockquote cite="http://www.gutenberg.org/ebooks/1260">
						<p class="text-muted">Buenas noches y bienvenidos a todos lo presentes, autoridades, legisladores, funcionarios de gobierno y de Toyota Argentina, representantes de organizaciones de la sociedad civil, directivos y personal de nuestra empresa, familiares, amigos.
				Nos convoca hoy una fecha especial que nos relaciona con la comunidad desde otro lugar, como hacedores y protagonistas del cambio al que la agenda 2030 de Naciones Unidas y su visión ambiciosa del desarrollo sostenible apunta: a la integración de la empresa con las dimensiones económica, social y ambiental de su comunidad.
				Todos los logros y metas alcanzadas en nuestros 52 años de trayectoria, se verán fortalecidos y potenciados con los nuevos resultados que a partir de la implementación y articulación de las estrategias de RSE y sus impactos vayamos obteniendo. 
				Éste es nuestro nuevo desafío, el que podremos alcanzar a partir del impulso que TOYOTA Argentina nos brinda de manera permanente; como también el que podamos potenciar y lograr desde el propio interior de la empresa, con el acompañamiento y protagonismo de directivos, gerentes, del personal, de los miembros de esta familia empresaria y el apoyo del Gobierno y legisladores.
				Este desafío depende de todos nosotros, los aquí presentes y quienes se vayan sumando, con quienes pretendemos articular acciones en pos de este nuevo modelo de negocio que la RSE sustenta, basado en los principios de los derechos humanos, ética y justicia social, hacia un futuro sostenible.
				En estos últimos 10 años hemos implementado diversas acciones de asistencia, apoyo y responsabilidad social en nuestra comunidad llegando a más de 14.000 personas de manera directa. 
				Pretendemos llegar a muchos más, confio en que lo lograremos entre todos.
				MUCHAS GRACIAS</p>
					</blockquote>
					<div class="mb-attribution">
						<div>
							<p class="mb-author">Eduardo Fredy Vargas</p>
							<p class="text-muted">Presidente Derka y Vargas S.A</p>
						</div>
						<div class="mb-thumb ml-2"></div>
					</div>
				</div>

			</div>
		</div>
	</div>
@stop

