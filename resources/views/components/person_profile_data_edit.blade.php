<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>
<div class="jumbotron jumbotron-fluid py-3" style="background-image: url('{{config('app.banner_image_url')."/default_entity_banner.jpg"}}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="container ">
        <div class="row d-flex flex-row px-md-4">
            <div class="col-12 col-sm-auto image-parent position-relative py-2 d-flex flex-center align-self-center">
                <img id="prev_img" src="{{config('app.user_image_url')}}/{{$person->picture}}" class="m-2 rounded-circle" alt="change_profile_picture" style="box-shadow:0 0 1px 6px #dc3545;width:120px;max-width:120px;height:120px;max-height:120px;align-self:center;">
                <div id="boto_imatge" class="col- mx-2 rounded-circle p-2 my-3" style="max-width:120px;max-height:120px;top:0;">Cambiar imagen de perfil</div>
                <div class="hiddenfile">
                    <input form="person_form" type="file" id="picture" accept="image/*" name="picture" onchange="checkSize(this);square_crop(this);" style="displya:none;"/>
                </div>
            </div>

            <div class="col-12 col-md-8">


                <div class="input-group mb-3">

                    <div class="input-group-prepend col-3 col-lg-2 p-0">
                        <span class="input-group-text col-12 text-danger font-weight-bold">
                             <label for="name" class="col-auto p-0 m-0">Nombre</label>
                             <i class="fas fa-user fa-1x mx-1 "></i>
                        </span>
                    </div>
                    <input form="person_form" name="name" class="col-9 text-danger font-weight-thin offset-" id="name" value="{{$person->name}}" required/>
                </div>

                <div class="input-group mb-3">

                    <div class="input-group-prepend col-3 col-lg-2 p-0">
                        <span class="input-group-text col-12 text-danger font-weight-bold">
                            <label for="city" class="col-auto p-0 m-0">Ciudad</label>
                             <i class="fas fa-map-marker-alt fa-1x mx-1 "></i>
                        </span>
                    </div>
                    <input form="person_form" name="city" class="col-9 text-danger font-weight-thin" id="city" value="{{$person->city}}"/>
                </div>

                <div class="input-group mb-3">

                    <div class="input-group-prepend col-3 col-lg-2 p-0">
                        <span class="input-group-text col-12 text-danger font-weight-bold">
                            <label for="phone_number" class="col-auto p-0 m-0">Teléfono</label>
                            <i class="fas fa-phone fa-1x mx-1 "></i>
                        </span>
                    </div>
                    <input form="person_form" name="phone_number" class="col-9 text-danger font-weight-thin " pattern = "^[0-9+]{9,13}$" id="phone_number" value="{{$person->phone_number}}" />
                </div>

            </div>
        </div>
    </div>
</div>




<div>
    <div class="row px-3">
        <div class="col-12 py-4 my-4 bg-light text-dark">
            <div class="row  mx-0">
                <label for="description" class="col-12 col-sm-3 my-1 px-2 text-danger font-weight-bold">Descripción:</label>
                <textarea form="person_form" id="description" name="description" rows="8" class="col-12">{{$person->description}}</textarea>
            </div>
        </div>
    </div>
</div>

<form id="person_form" name="person_form" method="POST" enctype="multipart/form-data" action="{{config('app.url')}}/user_edit">
    @csrf
    <input type="hidden" id="id_user" name="id_user" value="{{Auth::user()->id}}"/>

    <button type="submit" class="btn btn-success mx-4 p-3">
        <i class="fas fa-save fa-1x h-3 text-white mx-1"></i> Guardar cambios
    </button>

    <a href="{{config('app.url')}}/pet_form" class="nounderline text-white btn btn-danger mx-4 p-3" title="Añadir perfil de la mascota" id="add_person_pet">
        <i class="fas fa-pencil-alt fa-1x h-3 text-white mx-1"></i>
        Añadir perfil de mascota
    </a>

</form>
@component(
   'modals.modal_crop',
   ['form'=>'person'])
@endcomponent