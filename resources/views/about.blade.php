@extends('layout')

@section('title','About')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12 col-lg-6 mx-auto">
			<hl class="display-4">Sobre Nosotros</hl>
			<p class="lead text-secondary">
			En programación, crear, leer, actualizar y borrar ( con el acrónimo CRUD) son las cuatro funciones básicas de la persistencia de Bases de Datos. Términos alternativos son usados a veces cuando se definen las cuatro funciones básicas de CRUD, como “recuperar” en vez de “leer”, “modificar” en vez de “actualizar” o “destruir” en vez de “borrar”. CRUD se usa también a veces para describir convenciones de interfaz de usuario que facilita la vista, búsqueda y modificación de la información; a menudo se usa en programación de formularios (forms) e informes (reports). El término fue popularizado por primera vez por James Martin en su libro del año 1980 Managing the Data-base Enviroment. El acrónimo puede extenderse a CRUDL para cubrir el listado de gran cantidad de datos que conllevan una complejidad tal como paginación cuando los registros de datos son demasiado grandes para alojarse fácilmente en memoria.
			</p>
				<div class="col-12">
			<img class="img-fluid mb-4" src="/img/about.svg">
		</div>
	</div>
</div>
@endsection
