<?php
/**
 * Created by PhpStorm.
 * User: DAW2
 * Date: 13/05/2020
 * Time: 21:41
 */
?>

<a href="{{config('app.url')}}/pet/{{$pet->id}}" class="text-dark nounderline">
    <div class="card">
        <div class="row no-gutters h-100">
            <div class="col-12 overflow-hidden">
                <img class="card-img-top" src="{{config('app.pet_image_url')}}/{{$pet->img_thumbnail}}" />
            </div>
            <div class="col-12">
                <div class="card-body d-flex flex-column justify-content-between h-100">
                    <h5 class="card-title">{{$pet->name}}, {{$pet->age}}</h5>
                    <p class="card-text">{{$pet->short_desc}}</p>
                </div>
            </div>
        </div>
    </div>
</a>