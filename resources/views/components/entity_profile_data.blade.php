<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>
<div class="jumbotron jumbotron-fluid py-3" style="background-image: url('{{config('app.banner_image_url')}}/{{$entity->banner}}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="container position-relative">
        <div class="row d-flex flex-row px-md-4">
            <img src="{{config('app.entity_image_url')}}/{{$entity->logo}}" class="" alt="Def_Logo_de_la_entidad" style="height:120px;max-height:120px;align-self:center;">
        </div>
        @auth
            @if(Auth::id() == $entity->id_user)
                <a href="{{config('app.url').'/profile_edit'}}" class="btn btn-success mx-4 p-3 nounderline text-white position-absolute" id="edit_entity" title="Edita los datos de tu entidad" style="width:fit-content;right:3rem;top:0;">
                    <i class="fas fa-pencil-alt fa-1x h-3 mx-1"></i>
                    Editar perfil
                </a>
            @endif
        @endauth
    </div>
</div>


<div>
    <div class="row px-3">
        <div class="col-12 col-md-8 d-flex align-middle justify-content-between">
            <div class="row mx-0  py-0">
                <span class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">Nombre:</span>
                <span class="col-12 col-sm-9 my-1 bg-danger text-white" id="nombre_asociacion">{{$entity->name}}</span>
                <input type="hidden" id="name" name="name" value="{{$entity->name}}"/>

                <span class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">Horario:</span>
                <span class="col-12 col-sm-9 my-1 bg-danger text-white" id="timetable">{{$entity->timetable}}</span>

                <span class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">Contacto:</span>
                <span class="col-12 col-sm-9 my-1 bg-danger text-white" id="contacto_entidad" >{{$entity->phone}} {{$entity->email}}</span>

                @if(isset($entity->website) || isset($entity->facebook) || isset($entity->instagram))
                    <span class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">Redes sociales:</span>
                    <span class="col-12 col-sm-9 my-1 bg-danger text-white" id="redes">

                        @if(isset($entity->website))
                            <a href="{{$entity->website}}" target="_blank">
                                <i class="fas fa-globe text-white fa-2x h-3 m-1"></i>
                            </a>
                        @endif

                        @if(isset($entity->facebook))
                            <a href="{{$entity->facebook}}" target="_blank">
                                <i class="fab fa-facebook-square text-white fa-2x h-3 m-1"></i>
                            </a>
                        @endif

                        @if(isset($entity->instagram))
                            <a href="{{$entity->instagram}}" target="_blank">
                                <i class="fab fa-instagram text-white fa-2x h-3 m-1"></i>
                            </a>
                        @endif
                    </span>
                @endif

                <span class="col-6 col-sm-3 my-1 px-2 text-danger font-weight-bold">Dirección:</span>
                <span class="col-12 col-sm-9 my-1 bg-danger text-white" id="direccion_asociacion">{{$entity->address}}</span>
                <input type="hidden" id="address" name="address" value="{{$entity->address}}"/>

            </div>
        </div>

        <div class="col-12 col-md-4 text-light my-1" style="min-height:200px;">
            <div class="d-flex flex-column justify-content-center text-center bg-light p-3 h-100 text-danger" id="map">MAPA GOOGLE</div>
        </div>

        <div class="col-12 py-4 my-4 bg-light text-dark">
            <div class="row  mx-0">
                <p>
                    {{$entity->description}}
                </p>
            </div>
        </div>
    </div>
</div>