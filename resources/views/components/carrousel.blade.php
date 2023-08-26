<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>
<!-- CARRUSEL DE BANNERS DE ENTIDADES -->
<div id="carrousel" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        @for ($i = 0; $i < count($banners); $i++)
            @if($i == 0)
                <li data-target="#carrousel" data-slide-to="{{$i}}" class="active"></li>
            @endif
                <li data-target="#carrousel" data-slide-to="{{$i}}"></li>
        @endfor
    </ul>

    <div class="carousel-inner">
        @for ($i = 0; $i < count($banners); $i++)

            <div class="carousel-item {{($i == 0)?"active":""}}">
                <a href="{{config('app.url')."/profile/"}}{{$banners[$i]->id_user}}" class="text-dark nounderline">
                    <div class ="banner-img-top" style="background-image:url('{{config('app.banner_image_url')}}/{{$banners[$i]->banner}}');"></div>
                    <div class="carousel-caption">
                        <h3>{{$banners[$i]->name}}</h3>
                    </div>
                </a>
            </div>
        @endfor
        <a class="carousel-control-prev" href="#carrousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#carrousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>