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
        <div class="col-12 col-md-4">
            @if(isset($pet->img_thumbnail))
                <div class="row">
                    @component(
                        'components.pet_profile_pic',
                        ['pet_thumb'=>$pet->img_thumbnail])
                    @endcomponent
                </div>
            @else
                Mascota sin imagen
            @endif
        </div>


        <div class="col-12 col-md-8">
            <div class="row mx-0  py-0 mb-2">
                <span  class="col-3 my-1 px-2 text-danger font-weight-bold">Nombre:</span>
                <span class="col-9 my-1 bg-danger text-white" id="name">{{$pet->name}}</span>

                <span class="col-3 my-1 px-2 text-danger font-weight-bold">Edad:</span>
                <span class="col-3 my-1 bg-danger text-white" id="age">{{$pet->age}}</span>

                <span class="col-3 my-1 px-2 text-danger font-weight-bold">Sexo:</span>
                <span class="col-3 my-1 bg-danger text-white" id="gender" >{{$pet->gender}}</span>

                <span class="col-3 my-1 px-2 text-danger font-weight-bold">Raza:</span>
                <span class="col-9 my-1 bg-danger text-white" id="breed">{{$pet->breed}}</span>

                <span class="col-4 col-md-3 my-1 px-2 text-danger font-weight-bold">Nacimiento:</span>
                <span class="col-8 col-md-4 my-1 bg-danger text-white" id="birthdate">{{$pet->birthdate}}</span>

                <span class="col-4 col-md-3 my-1 px-2 text-danger font-weight-bold">Esterilizad@:</span>
                <span class="col-8 col-md-2 my-1 bg-danger text-white" id="sterilized">{{$pet->sterilized}}</span>

                <span class="col-3  my-1 px-2 text-danger font-weight-bold">Tamaño:</span>
                <span class="col-4  my-1 bg-danger text-white" id="size">{{$pet->size}}</span>

                <span class="col-2  my-1 px-2 text-danger font-weight-bold">Peso:</span>
                <span class="col-3  my-1 bg-danger text-white" id="weight" >{{$pet->weight}}</span>

                <span class="col-4 col-lg-3 my-1 px-2 text-danger font-weight-bold">Cuidador/a:</span>

                @guest
                    <a href="{{config('app.url')}}/profile/{{$master->id}}" class="col-8 my-1 " id="master">{{$master->name}}</a>
                @else
                    @if(Auth::id() == $master->id)
                        <a href="{{config('app.url')}}/profile" class="col-8 my-1 " id="master">{{$master->name}}</a>
                    @else
                        <a href="{{config('app.url')}}/profile/{{$master->id}}" class="col-8 my-1 " id="master">{{$master->name}}</a>
                    @endif
                @endguest


            </div>
        </div>
        <div class="col-12 pt-4 bg-light text-dark">
            <div class="row  mx-0">
                <p id="description">
                    {{$pet->description}}
                </p>
            </div>
        </div>
    </div>
</div>