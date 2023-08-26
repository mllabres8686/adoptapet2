<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

Use App\Entity_profile;
Use App\User_profile;
Use App\Pet_profile;

class MainController extends Controller
{
    // CARRUSEL
    public function index(){
      $banners = Entity_profile::select('id', 'name', 'banner')->orderBy('created_at', 'desc')->take(5)->get();
      $pet_length = Pet_profile::count();
      $pets = Pet_profile::orderBy('created_at', 'desc')->get();
      
      foreach($pets as $pet){
        $pet->age = Carbon::parse($pet->birthdate)->diff(Carbon::now())->format('%y años');
      }

      return view('home', [ 'banners' => $banners, 'pets' => $pets, 'pet_length' => $pet_length]);
    }
}
