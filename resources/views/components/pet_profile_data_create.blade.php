<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>

<div>
    <div class="row px-3">
        <div class="col-12 col-md-4 bg-light">
            <img id="prev_img" src="{{config('app.pet_image_url')."/default_pet_image.png"}}" class="card-img-top" alt="profile_picture">
            <div id="boto_imatge" class="text-white p-4 m-0 h2" style="font-size:3rem;top:0;background-color:#dc354591;">Cargar imagen</div>
            <div class="hiddenfile">
                <input form="pet_create_form" type="file" id="img_thumbnail" accept="image/*" name="img_thumbnail" onchange="checkSize(this);" style="displya:none;" required/>
            </div>
        </div>


        <div class="col-12 col-md-8">
            <div class="row mx-0  py-0 mb-2">
                <label for="name" class="col-4 col-lg-2 my-1 px-2 text-danger font-weight-bold">Nombre:</label>
                <input form="pet_create_form" class="col-8 col-lg-10 my-1 bg-danger text-white" type="text" id="name" name="name" value="" required/>



                <label for="species" class="col-2 col-md-2  my-1 px-2 text-danger font-weight-bold">Especie:</label>
                <select form="pet_create_form" id="species" name="species" class="col-6 offset-4 offset-md-0 col-md-3 my-1 bg-danger text-white" required>
                    <option value="Perro">Perro</option>
                    <option value="Gato">Gato</option>
                    <option value="Ave">Ave</option>
                    <option value="Reptil">Reptil</option>
                    <option value="Otro">Otro</option>
                </select>

                <label for="breed" class="col-2 col-md-2  my-1 px-2 text-danger font-weight-bold">Raza:</label>
                <input form="pet_create_form" class="col-6 offset-4 offset-md-0 col-md-5 my-1 bg-danger text-white" type="text" id="breed" name="breed" value="" required/>

                <label for="gender" class="col-2 col-md-2 my-1 px-2 text-danger font-weight-bold">Sexo:</label>
                <select form="pet_create_form" id="gender" name="gender" class="col-6 offset-4 offset-md-0 col-md-3 my-1 bg-danger text-white" required>
                    <option value="Macho">Macho</option>
                    <option value="Hembra">Hembra</option>
                </select>

                <label for="birthdate" class="col-4 col-md-3 col-lg-2 my-1 px-2 text-danger font-weight-bold">Nacimiento:</label>
                <input form="pet_create_form" class="col-6 offset-2 offset-md-0 col-md-4 col-lg-5 my-1 bg-danger text-white" type="date" id="birthdate" name="birthdate" value="" required/>

                <label for="sterilized" class="col-4 col-md-3 my-1 px-2 text-danger font-weight-bold">Esterilizad@:</label>
                <select form="pet_create_form" id="sterilized" name="sterilized" class="col-3 col-md-2 my-1 bg-danger text-white" required>
                    <option value="1" >Sí</option>
                    <option value="0" >No</option>
                </select>

                <label for="weight" class="col-2 offset-md-2  my-1 px-2 text-danger font-weight-bold">Peso:</label>
                <input form="pet_create_form" class="col-3  my-1 bg-danger text-white" id="weight"  type="number" name="weight"  value="" required/>

                <span class="col-4 col-lg-3 my-1 px-2 text-danger font-weight-bold">Cuidador/a:</span>
                <a href="{{config('app.url')}}/profile" class="col-8 my-1 " >{{$master->name}}</a>

            </div>
        </div>

        <div class="col-12 py-4 my-4 bg-light text-dark">
            <div class="row  mx-0">
                <label for="description" class="col-12 col-sm-3 my-1 px-2 text-danger font-weight-bold">Descripción:</label>
                <textarea form="pet_create_form" id="description" name="description" rows="8" class="col-12"></textarea>
            </div>
        </div>


        <form id="pet_create_form" name="pet_create_form" class="container row" enctype="multipart/form-data" method="POST" action="{{config('app.url')}}/pet_create">
            @csrf
            @if(isset($pet->id))
                <input type="hidden" id="id" name="id" value="{{$pet->id}}"/>
            @endif
            <input type="hidden" id="id_user" name="id_user" value="{{$master->id}}"/>

            <div class="col-12 d-flex flex-row justify-content-center">

                <button form="pet_create_form" type="submit" class="btn btn-success m-4 p-2">
                    <i class="fas fa-save"></i> Publicar perfil de la mascota
                </button>

            </div>
        </form>
    </div>
</div>

{{--
@component(
   'components.modals')
@endcomponent
--}}