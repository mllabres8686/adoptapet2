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
                    @if(isset($edit))
                        @component(
                            'components.pet_profile_pic',
                            ['edit'=>true,'pet_thumb'=>$pet->img_thumbnail])
                        @endcomponent
                    @else
                        @component(
                            'components.pet_profile_pic',
                            ['pet_thumb'=>$pet->img_thumbnail])
                        @endcomponent
                    @endif
                </div>
            @else
                Mascota sin imagen
            @endif
        </div>


        <div class="col-12 col-md-8">
            <div class="row mx-0  py-0 mb-2">
                <label for="name" class="col-3 col-lg-2 my-1 px-2 text-danger font-weight-bold">Nombre:</label>
                <input form="pet_form" class="col-9 col-lg-10 my-1 bg-danger text-white" type="text" id="name" name="name" value="{{(isset($pet->name))?$pet->name:""}}" required/>

                <label for="gender" class="col-3 col-md-2 my-1 px-2 text-danger font-weight-bold">Sexo:</label>
                <select form="pet_form" id="gender" name="gender" class="col-6 offset-3  offset-md-0 col-md-3 my-1 bg-danger text-white" required>
                    <option value="Macho" {{(isset($pet->gender))?($pet->gender = "Macho"?"selected":""):""}}>Macho</option>
                    <option value="Hembra" {{(isset($pet->gender))?($pet->gender = "Hembra"?"selected":""):""}}>Hembra</option>
                </select>

                <label for="breed" class="col-3 col-md-2  my-1 px-2 text-danger font-weight-bold">Raza:</label>
                <input form="pet_form" class="col-9 col-md-5 my-1 bg-danger text-white" type="text" id="breed" name="breed" value="{{(isset($pet->breed))?$pet->breed:""}}" required/>

                <label for="birthdate" class="col-4 col-md-3 my-1 px-2 text-danger font-weight-bold">Nacimiento:</label>
                <input form="pet_form" class="col-8 col-md-9 my-1 bg-danger text-white" type="date" id="birthdate" name="birthdate" value="{{(isset($pet->birthdate))?$pet->birthdate:""}}" required/>

                <label for="sterilized" class="col-4 col-md-3 my-1 px-2 text-danger font-weight-bold">Esterilizad@:</label>
                <select form="pet_form" id="sterilized" name="sterilized" class="col-3 col-md-2 my-1 bg-danger text-white" required>
                    <option value="1" {{(isset($pet->sterilized))?(($pet->sterilized = true)?"selected":""):""}}>Sí</option>
                    <option value="0" {{(isset($pet->sterilized))?(($pet->sterilized = false)?"selected":""):""}}>No</option>
                </select>

                <label for="weight" class="col-2 offset-md-2  my-1 px-2 text-danger font-weight-bold">Peso:</label>
                <input form="pet_form" class="col-3  my-1 bg-danger text-white" id="weight"  type="number" name="weight"  value="{{(isset($pet->weight))?$pet->weight:""}}" required/>

                <span class="col-4 col-lg-3 my-1 px-2 text-danger font-weight-bold">Cuidador/a:</span>
                <a href="{{config('app.url')}}/profile" class="col-8 my-1 " >{{$master->name}}</a>



            </div>
        </div>

        <div class="col-12 py-4 my-4 bg-light text-dark">
            <div class="row  mx-0">
                <label for="description" class="col-12 col-sm-3 my-1 px-2 text-danger font-weight-bold">Descripción:</label>
                <textarea form="pet_form" id="description" name="description" rows="8" class="col-12">{{(isset($pet->description))?$pet->description:""}}</textarea>
            </div>
        </div>

        <form id="pet_form" name="pet_form" class="container row" enctype="multipart/form-data" method="POST" action="{{config('app.url')}}/pet_edit">
            @csrf
            @if(isset($pet->id))
                <input type="hidden" id="id" name="id" value="{{$pet->id}}"/>
            @endif


            <div class="col-12 d-flex flex-row justify-content-center">

                <button type="submit" class="btn btn-success m-4 p-2">
                    <i class="fas fa-save"></i> Guardar cambios
                </button>

                <label for="pet_new_pic" class="custom-file-upload btn btn-primary m-4 p-2" style="cursor: pointer;padding: 6px 12px;display: inline-block; border: 1px solid #ccc;">
                    <i class="fa fa-cloud-upload"></i> Añadir nueva imagen...
                </label>

            </div>
        </form>

        <form id="pet_pic_form" name="pet_pic_form" class="container row" enctype="multipart/form-data" method="POST" action="{{config('app.url')}}/pet_pic_upload">
            @csrf
            @if(isset($pet->id))
                <input type="hidden" id="pet_id" name="pet_id" value="{{$pet->id}}"/>
            @endif
            <input form="pet_pic_form" id="pet_new_pic" name="pet_new_pic" type="file" onchange="checkSize(this);square_crop(this);" accept="image/*" style="display:none;"/>
        </form>
    </div>
</div>


@component(
   'modals.modal_crop',
   ['form'=>'pet'])
@endcomponent
