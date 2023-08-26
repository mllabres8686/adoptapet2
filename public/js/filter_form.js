/**
 * Created by DAW2 on 26/05/2020.
 */

var total_pages = 0;
var current_page = 1;
var pet_list = [];
var breed_list = [];
var pets_per_page = 6;
var pets_per_row = 6;
var id_entity = "";
var entity_form = false;
var edit_entity_form = false;

var domain = "https://adoptapet.ga/";
var pet_image_path = domain+"/pet_images/";


/*recupera todas las pets de la BBDD i guarda las razas de cada especie*/
function get_all_pets(id_user){
    $.post(
        domain + "api/pets",
        {   id_user:id_user,
            description:"",
            breed:"",
            species:""
        },
        function (data, status, xhr) {
            //TO-DO
        },"json").done(function (data) {
        //console.log(data);
        pet_list = JSON.parse(JSON.stringify(data));
        var razas_perro = [];
        var razas_gato = [];
        var razas_ave = [];
        var razas_reptil = [];
        var razas_otro = [];
        for (var i = 0; i <  pet_list.length ; i++) {
            var raza = pet_list[i].breed;
            switch(pet_list[i].species) {
                case "Perro":
                    if ( !razas_perro.includes(raza, 0) ){
                        razas_perro.push(raza);
                    }
                    break;
                case "Gato":
                    if ( !razas_gato.includes(raza, 0) ){
                        razas_gato.push(raza);
                    }
                    break;
                case "Ave":
                    if ( !razas_ave.includes(raza, 0) ){
                        razas_ave.push(raza);
                    }
                    break;
                case "Reptil":
                    if ( !razas_reptil.includes(raza, 0) ){
                        razas_reptil.push(raza);
                    }
                    break;
                case "Otro":
                    if ( !razas_otro.includes(raza, 0) ){
                        razas_otro.push(raza);
                    }
                    break;
                default:
            }

        }
        breed_list = {
            'Perro':razas_perro,
            'Gato':razas_gato,
            'Ave':razas_ave,
            'Reptil':razas_reptil,
            'Otro':razas_otro
        };

    }).fail(function (data, status, xhr) {
        console.log("fail");
        console.log(data);
    }).always(function (data) {
        console.log("get_all_pets function finished");
    });
}

function get_filtered_pets(id_user, desc, checked_breeds, species){
    $.post(
        domain + "api/pets",
        {   id_user:id_user,
            description:desc,
            breed:checked_breeds,
            species:species
        },
        function (data, status, xhr) {
            $("#main_list, .pagination").empty();
        },"json").done(function (data) {

        pet_list = JSON.parse(JSON.stringify(data));

        current_pet_list = pet_list.slice((current_page-1)*pets_per_page, (current_page)*pets_per_page);
        var content = "";
        var  pagination = "";

        if(current_pet_list.length == 0){
            $("#main_list").append("<p>NO hay casos</p>");
        } else {
            //crea listado de pets
           // content += make_vertical_article(current_pet_list);
            //crea paginación
            //pagination += make_pagination(pet_list);

            if(entity_form){
                if(edit_entity_form){
                    //crea listado de pets
                    content += make_simple_editable_article(current_pet_list);
                } else {
                    //crea listado de pets
                    content += make_simple_article(current_pet_list);
                }
            } else {
                //crea listado de pets
                content += make_vertical_article(current_pet_list);

            }
            //crea paginación
            pagination += make_pagination(pet_list);
        }

        $("#main_list").append(content);
        $(".pagination").append(pagination);

    }).fail(function () {
        console.log("fail");
    }).always(function (data) {
        console.log("filer function finished");
    });
}

//crea la paginacion
function make_pagination(json){
    var pagination = "";

    pagination += "<div class=\"pagination d-flex justify-content-center\">";
    pagination += "<span>&laquo;</span>";
    $.each(json, function(i, pet) {

        if(i%pets_per_page == 0){
            if((i+1) === current_page){
                pagination += "<span class='pagination_index my-0 mx-1 selected'>"+(i/pets_per_page+1)+"</span>";
            }else{
                pagination += "<span class='pagination_index my-0 mx-1'>"+(i/pets_per_page+1)+"</span>";
            }

        }
    });
    pagination += "<span>&raquo;</span>";
    pagination += "</div>";

    return pagination;
}
//crea el grid de pets
function make_vertical_article(json){
    var content = "";

    $.each(json, function(index, pet) {

        if (index == 0) {
            //OPEN ROW
            content += "<div class='row'>";
        }
        else if (index % pets_per_row == 0) {
            //CLOSE ROW + OPEN ROW
            content += "</div><div class='row'>";
        }
        content += "<div class=\"col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch my-2\">";
        content += "<a href=\"" + domain + "pet/" + pet.id + "\" class=\"text-dark nounderline\">";
        content += "    <div class=\"card\">";
        content += "        <div class=\"row no-gutters h-100\">";
        content += "            <div class=\"col-12 overflow-hidden\">";
        content += "                <img class=\"card-img-top\" src=\"" + pet_image_path + pet.img_thumbnail + "\" />";
        content += "            </div>";
        content += "            <div class=\"col-12\">";
        content += "                <div class=\"card-body d-flex flex-column justify-content-between h-100\">";
        content += "                   <h5 class=\"card-title\">" + pet.name + ", " + pet.age + "</h5>";
        content += "                    <p class=\"card-text\">" + pet.short_desc + "</p>";
        content += "                </div>";
        content += "            </div>";
        content += "        </div>";
        content += "    </div>";
        content += "</a>";
        content += " </div>";
    });

    content += " </div>";

    return content;
}

function make_simple_article(json){
    var content = "";

    $.each(json, function(index, pet) {

        if (index == 0) {
            //OPEN ROW
            content += "<div class='row'>";
        }
        else if (index % pets_per_row == 0) {
            //CLOSE ROW + OPEN ROW
            content += "</div><div class='row'>";
        }

        content += "<div class=\"col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch my-2\">";
        content += "    <a class=\"nounderline\" href=\"" + domain + "pet/" + pet.id + "\" style=\"width: 100%;\">";
        content += "        <div class=\"card mb-3 position-relative\">";
        content += "            <div class=\"row no-gutters\">";
        content += "                <div class=\"col-12 position-relative overflow-hidden\">";
        content += "                    <img class=\"card-img-top\" src=\"" + pet_image_path + pet.img_thumbnail + "\" />";
        content += "                    <h5 class=\"floating_text left card-title position-absolute px-3 py-1 m-0\">" + pet.name + ", " + pet.age + "</h5>";
        content += "                </div>";
        content += "            </div>";
        content += "        </div>";
        content += "    </a>";
        content += "</div>";
    });

    content += " </div>";

    return content;
}

function make_simple_editable_article(json){
    var content = "";

    $.each(json, function(index, pet) {
        if (index == 0) {
            //OPEN ROW
            content += "<div class='row'>";
        }
        else if (index % pets_per_row == 0) {
            //CLOSE ROW + OPEN ROW
            content += "</div><div class='row'>";
        }

        content += "<div class=\"col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch my-2\">";
        content += "        <div class=\"card mb-3 position-relative\" style=\"width:100%;\">";
        content += "            <div class=\"row no-gutters\">";
        content += "                <div class=\"col-12 position-relative overflow-hidden\">";
        content += "                    <img class=\"card-img-top\" src=\"" + pet_image_path + pet.img_thumbnail + "\" />";
        content += "                    <h5 class=\"floating_text left card-title position-absolute px-3 py-1 m-0\">" + pet.name + ", " + pet.age + "</h5>";
        content += "                </div>";
        content += "            </div>";
        content += "            <div class=\"py-1 px-2 d-flex flex-row justify-content-between\">";
        content += "                <button  type=\"button\" class=\"btn btn-warning p-0\" title=\"Editar perfil de la mascota\" >";
        content += "                    <a href=\"" + domain + "pet_edit/" + pet.id + "\" class=\"nounderline d-block p-1 text-dark\">";
        content += "                        <i class=\"fas fa-pencil-alt fa-1x h-3 mx-1\"></i></a></button>";
        content += "                <button  type=\"button\" class=\"btn btn-danger p-0\" title=\"Borrar perfil de la mascota\">";
        content += "                    <a href=\"" + domain + "pet_delete/" + pet.id + "\" class=\"nounderline d-block p-1 text-white\">";
        content += "                        <i class=\"fas fa-trash-alt fa-1x h-3 mx-1\"></i></a></button>";
        if(pet.state = true){
            content += "                <button type=\"button\" class=\"btn btn-success p-0\" title=\"Marca la mscota como adoptada\">";
            content += "                    <a href=\"" + domain + "pet_adopted/" + pet.id + "\" class=\"nounderline d-block p-1 text-white\">";
            content += "                        <i class=\"fas fa-house-user fa-1x h-3 mx-1\"></i>";
            content += "                    </a>";
            content += "                </button>";
        } else {
            content += "                <button type=\"button\" class=\"btn btn-secondary p-0\" title=\"Esta mascota ya ha sido adoptada\">";
            content += "                        <i class=\"fas fa-house-user fa-1x h-3 mx-1\"></i>";
            content += "                </button>";
        }


        content += "            </div>";
        content += "        </div>";
        content += "</div>";
    });

    content += " </div>";

    return content;
}

/*añade razas al dropdown*/
function set_specie_breeds_options(specie){
    var option = "";
    console.log(specie);
    if(specie == ""){
        $("#check_breeds").html("Elige primero una especie");
    } else {
        $("#check_breeds").empty();
    }

    option += "<div class=\"btn-group-toggle\" data-toggle=\"buttons\" style=\"display: flex;flex-wrap: wrap;max-width: 300px;width: 300px;\">";
    $.each(breed_list[specie], function(i, raza) {
        option += "<label class=\"btn btn-outline-danger m-2\"><input type=\"checkbox\" name=\"breed[]\" value=\""+raza+"\" autocomplete=\"off\"/>"+raza+"</label>";
    });
    option += "</div>";
    $("#check_breeds").append(option);
}

$(document).ready(function () {
    console.log("filter_forms.js carregat");

    var species = "";
    var desc = "";
    var checked_breeds = "";
    id_entity = "";
    entity_form = false;

    if ($("#id_entity").length > 0) {
        id_entity = $("#id_entity").val();
        console.log("filtering " + id_entity);
        entity_form = true;
    }
    if ($("#edit_entity").length > 0) {
        edit_entity_form = true;
    }
    //recuepra todos los pets y lso guarda en un array local
    if (entity_form){
        get_filtered_pets(id_entity, null, null, null,null);
        get_all_pets(id_entity);
    } else{
        get_all_pets();
        get_filtered_pets();
    }

    $("#breeds_dropdown_button").attr('disabled',true);

    //previene que se cierre el dropdown de razas cuando eliges una
    $(document).on('click', '#breeds_dropdown', function (e) {
        e.stopPropagation();
    });

    //cuando seleccionas una especie, te carga las razas de esa especie
    $('input[name="species"]').on("click", function(event) {
        species = $('input[name="species"]:checked').val();
        $("#searching_info").html("Buscando todas las razas de <span class='color-danger'>"+species+"</span>");
        $("#breeds_dropdown_button").attr('disabled',false);
        set_specie_breeds_options(species);

    });

    //cuando seleccionas una raza cambia el texto informativo
    $(document).on("click","#adoptapet_search_form input:checkbox", function(event) {

        var text = "";
        var checked_breeds = $("#adoptapet_search_form input:checkbox:checked").map(function(){
            return $(this).val();
        }).get();
        if(checked_breeds.length == 0){
            text = "Buscando todas las razas de <span class='text-danger'>"+species+"</span>";
        } else {
            text = "Buscando <span class='text-danger'>"+species+"</span> de raza(s): </span class='text-danger'>"+checked_breeds.join()+"</span>";
        }
        $("#searching_info").html(text);
    });

    //boton de filtrar
    $("#filter_button").on("click", function(event) {

        desc = $('input[name="desc"]').val();
        checked_breeds = $("#adoptapet_search_form input:checkbox:checked").map(function(){
            return $(this).val();
        }).get();

        $("#searching_info").html("Buscando <span class='text-danger'>"+species+"</span> de raza(s): </span class='text-danger'>"+checked_breeds.join()+"</span>");

        $.post(
            domain + "api/pets",
            {   id_user:id_entity,
                description:desc,
                breed:checked_breeds,
                species:species
            },
            function (data, status, xhr) {
                $("#main_list, .pagination").empty();

            },"json").done(function (data) {

            var json = JSON.parse(JSON.stringify(data));
            pet_list = json;

            current_pet_list = pet_list.slice((current_page-1)*pets_per_page, (current_page)*pets_per_page);
            var content = "";
            var  pagination = "";

            if(current_pet_list.length == 0){
                if(entity_form){

                } else {
                    $("#main_list").append("<p>No hay casos</p>");
                }
            } else {
                if(entity_form){
                    if(edit_entity_form){
                        //crea listado de pets
                        content += make_simple_editable_article(current_pet_list);
                    } else {
                        //crea listado de pets
                        content += make_simple_article(current_pet_list);
                    }
                } else {
                    //crea listado de pets
                    content += make_vertical_article(current_pet_list);
                    //crea paginación
                }
                pagination += make_pagination(json);
            }

            $("#main_list").append(content);
            $(".pagination").append(pagination);

        }).fail(function () {
            console.log("fail");
        }).always(function (data) {
            console.log("filer function finished");
        });
    });

    $(document).on("click", ".pagination_index", function(event){
        $(".pagination_index").removeClass("selected");
        $(this).addClass('selected');
        current_page = $(this).html();
        var content = "";

        current_pet_list = pet_list.slice((current_page-1)*pets_per_page, (current_page)*pets_per_page);

        console.log("current_pet_list has "+current_pet_list.length);
        console.log("enseñando pagina "+current_page);

        if(current_pet_list.length == 0){
            $("#main_list").append("<p>NO hay casos</p>");
        } else {
            $("#main_list").empty();
            //crea listado de pets
            content += make_vertical_article(current_pet_list);
        }

        $("#main_list").append(content);

    });
});