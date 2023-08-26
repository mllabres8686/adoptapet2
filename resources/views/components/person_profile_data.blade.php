<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>
<div class="jumbotron jumbotron-fluid py-3" style="background-image: url('{{config('app.banner_image_url')."/default_entity_banner.jpg"}}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="container position-relative">
        <div class="row d-flex flex-row px-md-4">
            <div class="col-12 col-sm-auto d-flex flex-column align-self-center">
                <img src="{{config('app.user_image_url')}}/{{$person->picture}}" class="m-2 rounded-circle" alt="profile_picture" style="box-shadow:0 0 1px 6px #dc3545;width:120px;max-width:120px;height:120px;max-height:120px;align-self:center;">
            </div>
            <div class="col-12 col-sm-8">
                <h1 id="person_name" class="text-danger font-weight-bold">{{$person->name}}</h1>
                <h6 id="person_ubication" class="text-danger font-weight-thin"><i class="fas fa-map-marker-alt fa-1x mx-1"></i>{{$person->city}}</h6>
                @guest
                    <span class="col-8 my-1 py-1 bg-danger text-white">Registrate para ver el contacto</span>
                @else
                    @if(!is_null($person->phone_number))
                        <p><span class="my-1 p-1 pr-2 bg-danger text-white nobreak"><i class="fas fa-phone fa-1x mx-1"></i>{{$person->phone_number}}</span></p>
                    @endif
                        <p><span class="my-1 p-1 pr-2 bg-danger text-white nobreak"><i class="fas fa-envelope fa-1x mx-1"></i>{{$person->email}}</span></p>
                @endguest
            </div>
        </div>
        @auth
            @if(Auth::id() == $person->id_user)
                <a href="{{config('app.url').'/profile_edit'}}" class="btn btn-success mx-4 p-3 nounderline text-white position-absolute" id="edit_profile" title="Edita los datos de tu perfil" style="width:fit-content;right:3rem;top:0;">
                    <i class="fas fa-pencil-alt fa-1x h-3 mx-1"></i>
                    Editar perfil
                </a>
            @endif
        @endauth
    </div>
</div>

<div>
    <div class="row px-3">
        <div class="col-12 py-5 bg-light text-dark">
            <div class="row mx-0">
                <p>
                    {{$person->description}}
                </p>
            </div>
        </div>
    </div>
</div>
