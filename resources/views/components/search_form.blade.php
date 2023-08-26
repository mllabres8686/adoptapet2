<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>
<!--FORMULARIO DE BUSQUEDA SOLO PARA ORDENADOR-->
<form id="adoptapet_search_form" class="form-inline justify-content-between my-0 py-2 px-3 .d-sm-none .d-md-block bg-light">
	@if(isset($id_entity))
		<input type="hidden" id="id_entity" name="id_entity" value="{{$id_entity}}"/>
	@endif
	@if(isset($edit))
		<input type="hidden" id="edit_entity" name="edit_entity" value="true"/>
	@endif
	<div class="d-flex m-0 p-0">
		<div class="dropdown">
			<button class="btn btn-outline-danger my-2 my-sm-0 dropdown-toggle" type="button" data-toggle="dropdown">Especie
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<div class="form-check form-check-inline m-0">
					<input class="form-check-input" type="radio" name="species" id="opcion_todas" value="">
					<label class="form-check-label" for="opcion_todas"><i class="fas fa-dog fa-1x h-3 mx-1"></i>Todas</label>
				</div>
				<div class="form-check form-check-inline m-0">
					<input class="form-check-input" type="radio" name="species" id="opcion_perros" value="Perro">
					<label class="form-check-label" for="opcion_perros"><i class="fas fa-dog fa-1x h-3 mx-1"></i>Perros</label>
				</div>
				<div class="form-check form-check-inline m-">
					<input class="form-check-input" type="radio" name="species" id="opcion_gatos" value="Gato">
					<label class="form-check-label" for="opcion_gatos"><i class="fas fa-cat fa-1x h-3 mx-1"></i>Gatos</label>
				</div>
				<div class="form-check form-check-inline  m-">
					<input class="form-check-input" type="radio" name="species" id="opcion_aves" value="Ave">
					<label class="form-check-label" for="opcion_aves"><i class="fas fa-crow fa-1x h-3 mx-1"></i>Aves</label>
				</div>
				<div class="form-check form-check-inline m-">
					<input class="form-check-input" type="radio" name="species" id="opcion_reptiles" value="Reptil">
					<label class="form-check-label" for="opcion_reptiles"><i class="fas fa-frog fa-1x h-3 mx-1"></i>Reptiles</label>
				</div>
				<div class="form-check form-check-inline m-">
					<input class="form-check-input" type="radio" name="species" id="opcion_otros" value="Otro">
					<label class="form-check-label" for="opcion_otros"><i class="fas fa-otter fa-1x h-3 mx-1"></i>Otros</label>
				</div>
			</ul>
		</div>


		<div class="dropdown d-flex">
			<button class="btn btn-outline-danger my-2 my-sm-0 dropdown-toggle" type="button" id="breeds_dropdown_button" data-toggle="dropdown">Raza
				<span class="caret"></span>
			</button>
			<ul id="breeds_dropdown" class="dropdown-menu">

				<div id="check_breeds">
					Elige primero una especie
				</div>

			</ul>
		</div>

	</div>

	<div class="m-0 p-0">
		<input class="form-control ml-sm-2" type="search" placeholder="Busca" name="desc" style="max-width:300px;">
		<button class="btn btn-outline-danger my-2 my-sm-0" type="button" id="filter_button">Buscar</button>
	</div>


</form>
<p id="searching_info" class="small m-0 px-2" style="width:100%">Aqui aparece información de tu búsqueda</p>