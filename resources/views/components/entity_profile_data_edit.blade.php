<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>

<div id="entity_edit_banner" class="jumbotron jumbotron-fluid py-3 position-relative" style="background-image: url('{{config('app.banner_image_url')}}/{{$entity->banner}}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="container ">
        <div class="row d-flex flex-row  px-md-4 ">
            <div class="image-parent position-relative">
                <img id="prev_img" src="{{config('app.entity_image_url')}}/{{$entity->logo}}" class="m-0 p-0" alt="DEF_Logo_de_la_entidad" style="height:120px;max-height:120px;align-self:center;padding:0 15px;">
                <div id="boto_imatge" class="m-0 p-0"  style="height:120px;max-height:120px;align-self:center;width:100%;">Cambiar logo</div>
                <div class="hiddenfile">
                    <input form="entity_form" type="file" id="logo" accept="image/*" name="logo" onchange="checkSize(this);square_crop(this);" style="displya:none;"/>
                </div>
            </div>

        </div>
    </div>

    <label for="banner" class="btn btn-success mx-4 p-3 nounderline text-white position-absolute" style="cursor: pointer;width:fit-content;right:3rem;top:1rem;">
        <i class="fa fa-cloud-upload"></i> Cambiar banner...
    </label>
    <input form="entity_form" id="banner" name="banner" type="file" onchange="checkSize(this);change_bg(this);banner_crop(this);" accept="image/*" style="display:none;"/>

</div>

<div>
    <div class="row px-3 editable_content">
        <div class="col-12 col-md-8">
            <div class="row mx-0  py-0">
                <label for="name" class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">Nombre:</label>
                <input form="entity_form" name="name" class="col-12 col-sm-9 my-1 bg-danger text-white" id="name" value="{{$entity->name}}" required/>

                <label for="time_table" class="col-6 col-sm-4 my-1 px-2 text-danger font-weight-bold">Horario de atención al público:</label>
                <input form="entity_form" name="time_table" class="col-12 col-sm-8 my-1 bg-danger text-white" id="time_table" value="{{$entity->time_table}}" />

                <label for="phone_number" class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">Teléfono:</label>
                <input form="entity_form" name="phone_number" class="col-12 col-sm-9 my-1 bg-danger text-white" id="phone_number" pattern="^[0-9+]{9,13}$" value="{{$entity->phone_number}}" />

                <label for="email" class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">Email:</label>
                <input form="entity_form" type="email" name="email" class="col-12 col-sm-9 my-1 bg-danger text-white" id="email" value="{{$entity->email}}" />

                <label for="facebook" class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">FB de la entidad:</label>
                <input form="entity_form" name="facebook" class="col-12 col-sm-9 my-1 bg-danger text-white" id="facebook" value="{{$entity->facebook}}" />

                <label for="instagram" class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">IG de la entidad:</label>
                <input form="entity_form" name="instagram" class="col-12 col-sm-9 my-1 bg-danger text-white" id="instagram" value="{{$entity->instagram}}" />

                <label for="website" class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">Web de la entidad:</label>
                <input form="entity_form" name="website" class="col-12 col-sm-9 my-1 bg-danger text-white" id="website" value="{{$entity->website}}"/>

                <label for="address" class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">Dirección:</label>
                <input form="entity_form" type="text" name="address" class="col-12 col-sm-9 my-1 bg-danger text-white" id="address" value="{{$entity->address}}" required/>
            </div>
        </div>

        <div class="col-12 col-md-4 text-light my-1" style="min-height:100%;">
            <div class="d-flex flex-column justify-content-center text-center bg-light p-3 h-100 text-danger" id="map">MAPA GOOGLE</div>
        </div>

        <div class="col-12 py-4 my-4 bg-light text-dark">
            <div class="row  mx-0">
                <label for="description" class="col-12 col-sm-3 my-1 px-2 text-danger font-weight-bold">Descripción:</label>
                <textarea form="entity_form" id="description" name="description" rows="8" class="col-12">{{$entity->description}}</textarea>
            </div>
        </div>

        <form id="entity_form" name="entity_form" method="POST" enctype="multipart/form-data" action="{{config('app.url')}}/entity_edit">
            @csrf
            <input type="hidden" id="id_user" name="id_user" value="{{Auth::user()->id}}"/>

            <button type="submit" class="btn btn-success mx-4 p-3">
                <i class="fas fa-save fa-1x h-3 text-white mx-1"></i> Guardar cambios
            </button>

            <a href="{{config('app.url')}}/pet_form" class="nounderline text-white btn btn-danger mx-4 p-3" title="Añadir perfil de la mascota" id="add_entity_pet">
                <i class="fas fa-pencil-alt fa-1x h-3 text-white mx-1"></i>
                Añadir perfil de mascota
            </a>
        </form>
    </div>
</div>

@component(
   'modals.modal_crop',
   ['form'=>'entity'])
@endcomponent
