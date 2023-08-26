<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entity_profile;
use App\Pet_profile;
use Carbon\Carbon;

class ApiController extends Controller
{
    // FILTRO
    public function getPets(Request $request){
      if(!isset($request->species) OR empty($request->species)){
        $request->species = '%';
      }
      if(!isset($request->description) OR empty($request->description)){
        $request->description = '%';
      }
      if(!isset($request->id_user) OR empty($request->id_user)){
        $request->id_user = '%';
      }

      if(!isset($request->breed) OR empty($request->breed)){
        $pets = Pet_profile::where('species', 'LIKE', $request->species)
                        ->where('breed', 'LIKE', '%')
                        ->where('description', 'LIKE', '%' . $request->description . '%')
                        ->where('id_user', 'LIKE', $request->id_user)->get();
      } else {
        $pets = Pet_profile::where('species', 'LIKE', $request->species)
                        ->whereIn('breed', $request->breed)
                        ->where('description', 'LIKE', '%' . $request->description . '%')
                        ->where('id_user', 'LIKE', $request->id_user)->get();
      }

      foreach($pets as $pet){
        $pet->age = Carbon::parse($pet->birthdate)->diff(Carbon::now())->format('%y años');
      }

      return response()->json($pets, 200);
    }

    public function getAddress($id){
      $address = Entity_profile::find($id)->address;
      return response()->json($address, 200);
    }
}
