/**
 * Created by DAW2 on 29/05/2020.
 */

$(document).ready(function(){


    /**boton de cropear:
     guarda los datos de cropeo y ejecuta el formulario
     */
    $("#pet_pic_crop").click(function(){
        var img = $("#imagen_original").attr('src');
        $("#x").val(size.x);
        $("#y").val(size.y);
        $("#h").val(size.h);
        $("#w").val(size.w);
        $("#pet_pic_form").submit();
    });

    $("#person_pic_crop").click(function(){
        var img = $("#imagen_original").attr('src');
        $("#x").val(size.x);
        $("#y").val(size.y);
        $("#h").val(size.h);
        $("#w").val(size.w);
        $("#person_form").submit();
    });

    $("#entity_pic_crop").click(function(){
        var img = $("#imagen_original").attr('src');
        $("#x").val(size.x);
        $("#y").val(size.y);
        $("#h").val(size.h);
        $("#w").val(size.w);
        $("#entity_form").submit();
    });



    $('#crop_image_modal').on('hidden.bs.modal', function () {
        console.log("closing modal");
        $("#pet_new_pic").val(null);
        $('#imagen_original').attr('src',null);
        $(".jcrop-holder").empty();
        size = null;

    });





});

/*JCrop*/
var size;

function square_crop(input) {

    if (input.files && input.files[0]) {
        var original_image = $('#imagen_original');
        original_image.attr('src',URL.createObjectURL(input.files[0]));
        original_image.Jcrop({
            aspectRatio: 1,
            boxHeight: 270,
            onSelect: function(c){
                size = {x:c.x,y:c.y,w:c.w,h:c.h};
                $("#crop").css("visibility", "visible");
            }
        });
        setTimeout(function(){
            $(".jcrop-holder").find('.img').attr('src',original_image.attr('src'));
            $('#crop_image_modal').modal();
        }, 300);
    }
    else {
        alert("fail!")
    }
}

function banner_crop(input) {
    if (input.files && input.files[0]) {
        var original_image = $('#imagen_original');
        original_image.attr('src',URL.createObjectURL(input.files[0]));
        original_image.Jcrop({
            aspectRatio: [57/25],
            boxHeight: 270,
            onSelect: function(c){
                size = {x:c.x,y:c.y,w:c.w,h:c.h};
                $("#crop").css("visibility", "visible");
            }
        });
        setTimeout(function(){
            $(".jcrop-holder").find('.img').attr('src',original_image.attr('src'));
            $('#crop_image_modal').modal();
        }, 300);
    }
    else {
        alert("fail!")
    }
}


