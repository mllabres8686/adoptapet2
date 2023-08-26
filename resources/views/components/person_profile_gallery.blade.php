<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>
<header class="row mt-5">
    <h1 class="col-12 text-center text-dark">Mascotas de  <span class="text-danger">{{$person_name}}</span></h1>
</header>

<div class="row mx-0">
    <div class="col-12 mt-4">


        @if(isset($pets))
            @if (count($pets) > 0 )
                @if(isset($edit))
                    @component(
                       'components.horizontal_articles',
                       ['edit'=>true,'pets'=>$pets])
                    @endcomponent
                @else
                    @component(
                      'components.horizontal_articles',
                      ['pets'=>$pets])
                    @endcomponent
                @endif
            @else
                <span class="text-danger">{{$person_name}}</span> aun no ha publicado el perfil de ninguna mascota
            @endif
        @else
            Galería no esta definida.
        @endif

    </div>
</div>