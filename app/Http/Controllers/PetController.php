<?php

namespace App\Http\Controllers;

use App\User;
use App\Pet_profile;
use App\Pet_pictures;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PetController extends Controller
{
  public function profile($id){
    $pet = Pet_profile::find($id);

    if ($pet->weight < 15){
      $pet->size = "Pequeño";
    } else if($pet->weight >= 15 && $pet->weight < 25){
      $pet->size = "Mediano";
    } else {
      $pet->size = "Grande";
    }

    if ($pet->sterilized == '1'){
      $pet->sterilized = 'Sí';
    } else {
      $pet->sterilized = 'No';
    }

    $master = User::find($pet->id_user);
    $pet->gallery = Pet_pictures::where('id_pet', $pet->id)->get();
    $pet->age = PetController::calc($pet);

    return view('pet', ['pet' => $pet, 'master' => $master]);
  }

  public function pet_form(){
    $master = User::find(auth()->id());

    return view('pet', [ 'create' => true, 'pet' => null, 'master' => $master]);
  }

  public function pet_create(Request $request){
    if($request->hasFile('img_thumbnail') && $request->file('img_thumbnail')->isValid()){
      $path = $request->img_thumbnail->store('pet_images');
      $picture = $request->img_thumbnail->hashName();
      /*$extension = $request->file('img_thumbnail')->extension();
      $resized_image = imagecreatetruecolor($request->w, $request->h);
      switch ( $extension )
      {
          case 'jpeg':
              $img_r = imagecreatefromjpeg($request->img_thumbnail);
              imagecopyresampled($resized_image, $img_r, 0, 0, $request->x,$request->y,$request->w,$request->h,$request->w,$request->h);
              header('Content-type: image/jpeg');
              imagejpeg($resized_image,$path);
              break;
          case 'png':
              $img_r = imagecreatefrompng($request->img_thumbnail);
              imagealphablending($resized_image, FALSE);
              imagesavealpha($resized_image, TRUE);
              imagecopyresampled($resized_image, $img_r, 0, 0, $request->x,$request->y,$request->w,$request->h,$request->w,$request->h);
              header('Content-type: image/png');
              imagepng($resized_image,$path);
              break;
          case 'gif':
              $img_r = imagecreatefromgif($request->img_thumbnail);
              imagecopyresampled($resized_image, $img_r, 0, 0, $request->x,$request->y,$request->w,$request->h,$request->w,$request->h);
              $background = imagecolorallocate($resized_image, 0, 0, 0);
              imagecolortransparent($resized_image, $background);
              header('Content-type: image/gif');
              imagegif($resized_image,$path);
              break;
      }*/
    }

    if($request->description == null){
      $description = '';
    } else {
      $description = $request->description;
    }

    $pet = pet_profile::create([
        'id_user' => auth()->id(),
        'img_thumbnail' => $picture,
        'name' => $request->name,
        'gender' => $request->gender,
        'species' => $request->species,
        'breed' => $request->breed,
        'birthdate' => $request->birthdate,
        'sterilized' => $request->sterilized,
        'weight' => $request->weight,
        'description' => $description,
    ]);

    Pet_pictures::create([
        'id_pet' => $pet->id,
        'picture' => $picture,
    ]);

    return redirect('/pet/' . $pet->id);
  }

  public function edit($id){
    if(Pet_profile::find($id)->id_user == auth()->id()){
      $pet = Pet_profile::find($id);
      $pet->gallery = Pet_pictures::where('id_pet', $pet->id)->get();
      $master = User::find($pet->id_user);

      return view('pet', [ 'edit' => true, 'pet' => $pet, 'master' => $master]);
    }

    return redirect('/pet/' . $id);
  }

  public function pet_update(Request $request){
    if(!isset($request->description) || empty($request->description || $request->description == null)){
      $request->description = '';
    }

    if(Pet_profile::find($request->id)->id_user == auth()->id()){
      $pet = Pet_profile::where('id', $request->id)->update([
          'name' => $request->name,
          'gender' => $request->gender,
          'breed' => $request->breed,
          'birthdate' => $request->birthdate,
          'sterilized' => $request->sterilized,
          'weight' => $request->weight,
          'description' => $request->description,
      ]);
    }

    return redirect('/pet/' . $request->id);
  }

  public function pet_delete($id){
    if(Pet_profile::find($id)->id_user == auth()->id()){
      $pictures = Pet_pictures::where('id_pet', $id)->get();

      foreach($pictures as $picture){
        Storage::delete('pet_images/' . $picture->picture);
      }
      Pet_pictures::where('id_pet', $id)->delete();
      Pet_profile::find($id)->delete();

      return redirect('/profile_edit');
    }

    return redirect('/pet/' . $id);
  }

  public function pet_image_delete($id){
    $pet_id = Pet_pictures::find($id)->id_pet;

    if (Pet_profile::find($pet_id)->id_user == auth()->id()){
      Storage::delete('pet_images/' . Pet_pictures::find($id)->picture);
      $picture = Pet_pictures::find($id)->delete();
    }

    return redirect('/pet_edit/' . $pet_id);
  }

  public function pet_image_upload(Request $request){
    if(Pet_profile::find($request->pet_id)->id_user == auth()->id()){
      if($request->hasFile('pet_new_pic') && $request->file('pet_new_pic')->isValid()){
        $path = $request->pet_new_pic->store('pet_images');
        $picture = $request->pet_new_pic->hashName();

        $extension = $request->file('pet_new_pic')->extension();
        $resized_image = imagecreatetruecolor($request->w, $request->h);
        switch ( $extension )
        {
          case 'jpeg':
            $img_r = imagecreatefromjpeg($request->pet_new_pic);
            imagecopyresampled($resized_image, $img_r, 0, 0, $request->x,$request->y,$request->w,$request->h,$request->w,$request->h);
            header('Content-type: image/jpeg');
            imagejpeg($resized_image,$path);
            break;
          case 'png':
            $img_r = imagecreatefrompng($request->pet_new_pic);
            imagealphablending($resized_image, FALSE);
            imagesavealpha($resized_image, TRUE);
            imagecopyresampled($resized_image, $img_r, 0, 0, $request->x,$request->y,$request->w,$request->h,$request->w,$request->h);
            header('Content-type: image/png');
            imagepng($resized_image,$path);
            break;
          case 'gif':
            $img_r = imagecreatefromgif($request->pet_new_pic);
            imagecopyresampled($resized_image, $img_r, 0, 0, $request->x,$request->y,$request->w,$request->h,$request->w,$request->h);
            $background = imagecolorallocate($resized_image, 0, 0, 0);
            imagecolortransparent($resized_image, $background);
            header('Content-type: image/gif');
            imagegif($resized_image,$path);
            break;
        }
      }

      Pet_pictures::create([
          'id_pet' => $request->pet_id,
          'picture' => $picture,
      ]);
    }

    return redirect('/pet_edit/' . $request->pet_id);
  }

  public function pet_image_select($id, $picture){
    if(Pet_profile::find($id)->id_user == auth()->id()){
      $picture = Pet_profile::find($id)->update([
          'img_thumbnail' => $picture
      ]);
    }

    return redirect('/pet_edit/' . $id);
  }

  public function pet_adopted($id){
    if(Pet_profile::find($id)->id_user == auth()->id()){
      Pet_profile::find($id)->update([
          'state' => 1,
      ]);
    }

    return redirect('/profile_edit');
  }

  public static function calc($pet){
    if(Carbon::parse($pet->birthdate)->diff(Carbon::now())->format('%y') == 1){
      $pet->age = Carbon::parse($pet->birthdate)->diff(Carbon::now())->format('%y año');
    } elseif(Carbon::parse($pet->birthdate)->diff(Carbon::now())->format('%y') > 1){
      $pet->age = Carbon::parse($pet->birthdate)->diff(Carbon::now())->format('%y años');
    } elseif (Carbon::parse($pet->birthdate)->diff(Carbon::now())->format('%m') == 1) {
      $pet->age = Carbon::parse($pet->birthdate)->diff(Carbon::now())->format('%m mes');
    } elseif (Carbon::parse($pet->birthdate)->diff(Carbon::now())->format('%m') > 1) {
      $pet->age = Carbon::parse($pet->birthdate)->diff(Carbon::now())->format('%m meses');
    } elseif (Carbon::parse($pet->birthdate)->diff(Carbon::now())->format('%d') == 1) {
      $pet->age = Carbon::parse($pet->birthdate)->diff(Carbon::now())->format('%d día');
    } elseif (Carbon::parse($pet->birthdate)->diff(Carbon::now())->format('%d') > 1) {
      $pet->age = Carbon::parse($pet->birthdate)->diff(Carbon::now())->format('%d días');
    }

    return $pet->age;
  }
}
