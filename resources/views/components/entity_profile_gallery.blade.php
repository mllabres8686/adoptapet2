<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>
<header class="row mt-5">
    <h1 class="col-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 text-center px-5 text-dark">Mascotas en adopción en <span class="text-danger">{{$entity->name}}</span></h1>
</header>

<div class="row mx-0">
    <div class="col-12 mt-4">

        <div class="col-12 mt-4">
        {{--formulario de filtro--}}
        @component(
              'components.search_form',
              ['id_entity'=>$entity->id_user])
        @endcomponent

            <div id="main_list">
        @if(isset($pets))
            @if (count($pets) > 0 )
                {{--enseña vistas de lmascota diferentes segun si se està editando la información o solo visualizandola--}}
                @if(isset($edit))
                    @component(
                       'components.vertical_articles',
                       ['edit'=>true,'component_type'=>'simple','pets'=>$pets])
                    @endcomponent
                @else
                    @component(
                       'components.vertical_articles',
                       ['component_type'=>'simple','pets'=>$pets])
                    @endcomponent
                @endif
            @else
                Esta entidad aun no ha compartido ninguna mascota
            @endif
        @else
            Galeria no esta definida
        @endif
            </div>

        </div>

    </div>
</div>