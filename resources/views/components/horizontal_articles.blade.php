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
    <div class="col-12 col-sm-6 d-flex align-items-stretch">
    @if($i%2 == 0)
        @if(isset($edit))
            @component(
               'components.left_article',
               ['edit'=>true,'pet'=>$pets[$i]])
            @endcomponent
        @else
            @component(
              'components.left_article',
              ['pet'=>$pets[$i]])
            @endcomponent
        @endif
    @else
        @if(isset($edit))
            @component(
              'components.right_article',
              ['edit'=>true,'pet'=>$pets[$i]])
            @endcomponent
        @else
            @component(
              'components.right_article',
              ['pet'=>$pets[$i]])
            @endcomponent
        @endif
    @endif
        </div>
@endfor
</div>