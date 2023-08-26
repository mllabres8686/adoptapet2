<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>
<div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-12 position-relative overflow-hidden">
            <img class="card-img-top" src="{{config('app.pet_image_url')}}/{{$pet_thumb->picture}}" />
        </div>
    </div>


    <p class="card-text py-1 px-2 my-0 text-center d-flex flex-row justify-content-between" style="background-color: #343a40!important;">

        <button type="button" class="btn_eliminar_foto_mascota btn btn-danger p-0" title="Borrar foto de la mascota">
            <a href="{{config('app.url')}}/pet_pic_delete/{{$pet_thumb->id}}" class="nounderline d-block p-1 pr-2 text-white">
                <i class="fas fa-trash-alt fa-1x h-3 mx-1"></i>
                Borrar
            </a>
        </button>

        <button  type="button" class="btn_foto_favorita_mascota btn btn-primary p-0 text-white" title="Elegir como foto principal de la mascota">
            <a href="{{config('app.url')}}/pet_pic_select/{{$pet_thumb->id_pet}}/{{$pet_thumb->picture}}" class="nounderline d-block p-1 pr-2 text-white">
                <i class="fas fa-star fa-1x h-3 mx-1"></i>
                Preferida
            </a>
        </button>
    </p>

</div>
