<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 29/05/2020
 * Time: 18:18
 */
?>
        <!-- Modal -->
<div class="modal fade" id="crop_image_modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4>Recortar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">

                <div class="text-center">
                    <p class="bg-info text-center p-2 px-3">
                        <i class="fas fa-exclamation fa-1x h-3 mx-1 bg-danger text-white" style="border-radius:100px;padding:1rem;line-height:.34rem;box-shadow: 0 0 3px 1px white;"></i>
                        Para poder ofrecer una mejor experiencia de usuario todas las imagenes que se enseñan en la <span class="text-danger">adoptapet.ga</span> son recortadas antes de guardarse.
                    </p>
                </div>

                <div>
                    <img src="#" id="imagen_original" class="img" />
                </div>


                @if($form == "pet")
                    <input form="pet_pic_form" type="hidden" id="x" name="x">
                    <input form="pet_pic_form" type="hidden" id="y" name="y">
                    <input form="pet_pic_form" type="hidden" id="w" name="w">
                    <input form="pet_pic_form" type="hidden" id="h" name="h">
                @elseif($form == "person")
                    <input form="person_form" type="hidden" id="x" name="x">
                    <input form="person_form" type="hidden" id="y" name="y">
                    <input form="person_form" type="hidden" id="w" name="w">
                    <input form="person_form" type="hidden" id="h" name="h">
                @elseif($form == "entity")
                    <input form="entity_form" type="hidden" id="x" name="x">
                    <input form="entity_form" type="hidden" id="y" name="y">
                    <input form="entity_form" type="hidden" id="w" name="w">
                    <input form="entity_form" type="hidden" id="h" name="h">
                @endif

            </div>
            <div class="modal-footer bg-danger">

                @if($form == "pet")
                    <button form="croped_image_form" type="submit" id="pet_pic_crop" class="btn btn-success  pull-left" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Guardar
                    </button>
                @elseif($form == "person")
                    <button form="croped_image_form" type="submit" id="person_pic_crop" class="btn btn-success  pull-left" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Guardar
                    </button>
                @elseif($form == "entity")
                    <button form="croped_image_form" type="submit" id="entity_pic_crop" class="btn btn-success  pull-left" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Guardar
                    </button>
                @endif

                <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span> Cancelar
                </button>
            </div>
        </div>
    </div>
</div>