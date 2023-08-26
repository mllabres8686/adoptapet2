<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>
@if(isset($pet->name))
    <header class="row mt-5">
        <h1 class="col-12 text-center text-danger">Galería de {{$pet->name}}</h1>
     </header>
@endif
<div class="row mx-0">
    <div class="col-12 mt-4">


        @if(isset($pet->gallery))
            @if (count($pet->gallery) > 0 )
                <div class="row">

                    @foreach($pet->gallery  as $pet_pic)
                        <div class="col-sm-12 col-md-6 col-lg-3 d-flex align-items-stretch my-2">
                            @if(isset($edit))

                                @component(
                                    'components.pet_profile_gallery_pic',
                                    ['pet_thumb'=>$pet_pic])
                                @endcomponent
                            @else
                                @component(
                                   'components.pet_profile_pic',
                                   ['pet_thumb'=>$pet_pic->picture])
                                @endcomponent
                            @endif
                        </div>
                    @endforeach
                </div>

            @else
                Esta mascota aun no tiene galeria de fotos
            @endif
        @else
            <div class="text-center">
                <p class="bg-info text-center p-2 px-3"><i class="fas fa-exclamation fa-1x h-3 mx-1 bg-danger text-white" style="border-radius:100px;padding:1rem;line-height:.34rem;box-shadow: 0 0 3px 1px white;"></i>Una vez hayas creado el perfil de tu mascota podrás subir imagenes en su galeria</p>
            </div>
        @endif

    </div>
</div>