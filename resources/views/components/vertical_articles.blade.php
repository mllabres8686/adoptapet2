<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>

<div class="row">
@for ($i = 0; $i < count($pets); $i++)
    <div class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch my-2">
        @if(isset($component_type))
            @if($component_type == "simple")
                {{--para pagina de MASCOTAS--}}
                @if(isset($edit))
                    @component(
                        'components.simple_article',
                        ['edit'=>true,'pet'=>$pets[$i]])
                    @endcomponent
                @else
                    @component(
                        'components.simple_article',
                        ['pet'=>$pets[$i]])
                    @endcomponent
                @endif
            @else
                {{--para pagina de ENTIDADES--}}
                @if(isset($edit))
                    {{--vista edicion mascotas--}}
                    @component(
                        'components.vertical_article',
                        ['edit'=>true,'pet'=>$pets[$i]])
                    @endcomponent
                @else
                    {{--vista visualizacion mascotas--}}
                    @component(
                       'components.vertical_article',
                       ['pet'=>$pets[$i]])
                    @endcomponent
                @endif
            @endif
        @else
            {{--para pagina de ENTIDADES--}}
            @component(
                'components.vertical_article',
                ['pet'=>$pets[$i]])
            @endcomponent
        @endif
   </div>
@endfor
</div>