<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>
@if(!isset($edit))
    <a href="{{config('app.url')}}/pet/{{$pet->id}}" class="text-dark nounderline">
@endif
    <div class="card mb-3">
        <div class="row no-gutters h-100">
            <div class="col-12 col-lg-5 d-flex overflow-hidden" style="margin:auto;">
                <img class="card-img-top" src="{{config('app.pet_image_url')}}/{{$pet->img_thumbnail}}" />
            </div>
            <div class="col-12 col-lg-7">
                <div class="card-body d-flex flex-column justify-content-between h-100 pb-0">
                    <h5 class="card-title">{{$pet->name}}, {{$pet->age}}</h5>
                    <p class="card-text">{{$pet->short_desc}}</p>
                    @if(isset($edit))
                        <div class="py-1 px-2 d-flex flex-row justify-content-between">
                            <button  type="button" class="btn btn-warning p-0" title="Editar perfil de la mascota" >
                                <a href="{{config('app.url')}}/pet_edit/{{$pet->id}}" class="nounderline d-block p-1 text-dark">
                                    <i class="fas fa-pencil-alt fa-1x h-3 mx-1"></i>
                                </a>
                            </button>

                            <button  type="button" class="btn btn-danger p-0" title="Borrar perfil de la mascota">
                                <a href="{{config('app.url')}}/pet_delete/{{$pet->id}}" class="nounderline d-block p-1 text-white">
                                    <i class="fas fa-trash-alt fa-1x h-3 mx-1"></i>
                                </a>
                            </button>

                            <button type="button" class="btn btn-success p-0" title="Marca la mascota como adoptada">
                                <a href="{{config('app.url')}}/pet_adopted/{{$pet->id}}" class="nounderline d-block p-1 text-white">
                                    <i class="fas fa-house-user fa-1x h-3 mx-1"></i>
                                </a>
                            </button>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@if(!isset($edit))
    </a>
@endif