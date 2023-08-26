/**
 * Created by DAW2 on 19/04/2020.
 */
function change_bg(item){
    var file = item.files[0];
    var reader = new FileReader();
    reader.onloadend = function () {
        $('#entity_edit_banner').css('background-image', 'url("' + reader.result + '")');
    }
    if (file) {
        reader.readAsDataURL(file);
    } else {
    }
}

function checkSize(item){
    var returnable = false;
    var upl = item;
    var max_size = 2000000;

    if(upl.files[0].size > max_size){
        console.log("File too big! "+upl.files[0].size);
        alert("Esa foto es demasiado grande! Máximo de 2MB");
        upl.value = "";
    } else {
        returnable = true;
    }

    return returnable;
}

$(document).ready(function () {
    console.log("image_form.js carregat");

    //hace click en vez del input
    $("#boto_imatge").click(function(){
        //alert("it works");
        $('#img_thumbnail, #picture, #logo').trigger('click');

    });

    //cambia valor del input cuando seleccionas imagen
    $("#img_thumbnail, #picture, #logo").on("change", function(event){
        var filename = $('input[type=file]').val().split('\\').pop();
        var prev = $("#prev_img");

        prev.attr('src',URL.createObjectURL(event.target.files[0]));
        prev.onload = function() {
            URL.revokeObjectURL(output.src);// free memory
        }
    });

    //cambia valor del input cuando seleccionas imagen
    $("#segon").on("change", function(event){
        var filename = $('input[type=file]').val().split('\\').pop();
        var prev = $("#prev_img");

        prev.attr('src',URL.createObjectURL(event.target.files[0]));
        prev.onload = function() {
            URL.revokeObjectURL(output.src);// free memory
        }
    });

});

    //enseñar imagen cuando la eliges en input
    function readURL(input) {
        console.log("image selected");
        $('#crop_modal').modal('show');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {


                $('#target,#segon').attr('src', e.target.result).css({'width':'auto','height':'200px'});

                JCrop($("#target"));
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
