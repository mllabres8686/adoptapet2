<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>
        <!-- CONTENIDOS -->
<div class="row mx-0">
    <div class="col-12 col-sm-3 mt-4 d-none d-md-block" style="background-color: #f8f9fa!important;">
        @component(
            'components.left_aside')
        @endcomponent
    </div>


    <div class="col-12 col-sm-9 mt-4">
        @component(
           'components.search_form')
        @endcomponent

        <div id="main_list">
            @component(
               'components.vertical_articles',
               ['component_type'=>'vertical','pets'=>$pets])
            @endcomponent
        </div>

    </div>
</div>