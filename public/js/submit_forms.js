/**
 * Created by DAW2 on 19/04/2020.
 */
$(document).ready(function () {
    console.log("submit_forms.js carregat");

    //pet_pic_form: añade una foto nueva a la galeria de la mascota.
    //cuando una nueva imagen es seleccionada, automaticamente el formulario hace submit

    $("#pet_new_pic").on("change", function(event){
        //alert("valor cambido");
        //$("#pet_pic_form").submit();
    });
});