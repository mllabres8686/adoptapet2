<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>
@if(!isset($edit))
    <a class="nounderline" href="{{config('app.url')}}/pet/{{$pet->id}}" style="width: 100%;">
@endif

<div class="card mb-3 position-relative">
    <div class="row no-gutters">
        <div class="col-12 position-relative overflow-hidden">
            <img class="card-img-top" src="{{config('app.pet_image_url')}}/{{$pet->img_thumbnail}}" />
            <h5 class="floating_text left card-title position-absolute px-3 py-1 m-0">{{$pet->name}}, {{$pet->age}}</h5>
        </div>
    </div>
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
            @if($pet->state = 0)
                <button type="button" class="btn btn-success p-0" title="Marca la mascota como adoptada">
                    <a href="{{config('app.url')}}/pet_adopted/{{$pet->id}}" class="nounderline d-block p-1 text-white">
                        <i class="fas fa-house-user fa-1x h-3 mx-1"></i>
                    </a>
                </button>
            @else
                <button type="button" class="btn btn-secondary p-0" title="Marca la mascota como adoptada">
                    <i class="fas fa-house-user fa-1x h-3 mx-1"></i>
                </button>
            @endif
        </div>
    @endif
</div>
@if(!isset($edit))
    </a>
@endif