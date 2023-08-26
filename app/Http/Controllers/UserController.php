<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

use App\User;
use App\User_profile;
use App\Entity_profile;
use App\Pet_profile;

class UserController extends Controller
{
  //
  public function profile(){

    $role = Auth()->user()->role;

    if($role == 'Persona'){
      $person = User_profile::where('id_user', auth()->id())->first();
      $pets = Pet_profile::where('id_user', auth()->user()->id)->get();

      foreach($pets as $pet){
        $pet->age = PetController::calc($pet);

        if(strlen($pet->description) > 90){
          $pet->short_desc = Str::substr($pet->description, 0, 90) . ' ...';
        } else {
          $pet->short_desc = $pet->description;
        }
      }

      return view('profile', [ 'person' => $person, 'pets' => $pets ]);
    } else {
      $entity = Entity_profile::where('id_user', auth()->id())->first();
      $pets = Pet_profile::where('id_user', auth()->user()->id)->get();

      foreach($pets as $pet){
        $pet->age = PetController::calc($pet);
      }

      return view('entity', [ 'entity' => $entity, 'entity_name' => $entity->name, 'pets' => $pets ]);
    }
  }

  public function edit(){
    $role = Auth()->user()->role;

    if($role == 'Persona'){
      $person = User_profile::where('id_user', auth()->id())->first();
      $pets = Pet_profile::where('id_user', auth()->user()->id)->get();

      foreach($pets as $pet){
        $pet->age = PetController::calc($pet);

        if(strlen($pet->description) > 90){
          $pet->short_desc = Str::substr($pet->description, 0, 90) . ' ...';
        } else {
          $pet->short_desc = $pet->description;
        }
      }

      return view('profile', [ 'edit' => true, 'person' => $person, 'pets' => $pets ]);
    } else {
      $entity = Entity_profile::where('id_user', auth()->id())->first();
      $pets = Pet_profile::where('id_user', auth()->user()->id)->get();

      foreach($pets as $pet){
        $pet->age = PetController::calc($pet);

        if(strlen($pet->description) > 90){
          $pet->short_desc = Str::substr($pet->description, 0, 90) . ' ...';
        } else {
          $pet->short_desc = $pet->description;
        }
      }

      return view('entity' , ['edit' => true, 'entity' => $entity, 'pets' => $pets]);
    }
  }

  public function user_update(Request $request){
    if($request->hasFile('picture') && $request->file('picture')->isValid()){
      if(User_profile::select('picture')->where('id_user',  auth()->id())->first()->picture != 'default_user_image.png'){
        Storage::delete('user_image/' . User_profile::select('picture')->where('id_user', auth()->id())->first()->picture);
      }
      $user_path = $request->picture->store('user_image');
      $picture = $request->picture->hashName();
      $extension = $request->file('picture')->extension();

      $resized_image = imagecreatetruecolor($request->w, $request->h);
      switch ( $extension )
      {
        case 'jpeg':
          $img_r = imagecreatefromjpeg($request->picture);
          imagecopyresampled($resized_image, $img_r, 0, 0, $request->x,$request->y,$request->w,$request->h,$request->w,$request->h);
          header('Content-type: image/jpeg');
          imagejpeg($resized_image,$user_path);
          break;
        case 'png':
          $img_r = imagecreatefrompng($request->picture);
          imagealphablending($resized_image, FALSE);
          imagesavealpha($resized_image, TRUE);
          imagecopyresampled($resized_image, $img_r, 0, 0, $request->x,$request->y,$request->w,$request->h,$request->w,$request->h);
          header('Content-type: image/png');
          imagepng($resized_image,$user_path);
          break;
        case 'gif':
          $img_r = imagecreatefromgif($request->picture);
          imagecopyresampled($resized_image, $img_r, 0, 0, $request->x,$request->y,$request->w,$request->h,$request->w,$request->h);
          $background = imagecolorallocate($resized_image, 0, 0, 0);
          imagecolortransparent($resized_image, $background);
          header('Content-type: image/gif');
          imagegif($resized_image,$user_path);
          break;
      }
    } else {
      $picture = User_profile::select('picture')->where('id_user', auth()->id())->first()->picture;
    }

    $persona = User_profile::where('id_user', auth()->id())
        ->update([ 'name' => $request->name,
            'city' => $request->city,
            'picture' => $picture,
            'phone_number' => $request->phone_number,
            'description' => $request->description]);

    return redirect('profile');
  }

  public function entity_update(Request $request){
    if($request->hasFile('logo') && $request->file('logo')->isValid()){
      if(Entity_profile::select('logo')->where('id_user', auth()->id())->first()->logo != 'default_entity_logo.png'){
        Storage::delete('entity_image/' . Entity_profile::select('logo')->where('id_user', auth()->id())->first()->logo);
      }
      $logo_path = $request->logo->store('entity_image');
      $logo = $request->logo->hashName();
      /*$extension = $request->file('logo')->extension();
      $resized_image = imagecreatetruecolor($request->w, $request->h);
      switch ( $extension )
      {
          case 'jpeg':
              $img_r = imagecreatefromjpeg($request->logo);
              imagecopyresampled($resized_image, $img_r, 0, 0, $request->x,$request->y,$request->w,$request->h,$request->w,$request->h);
              header('Content-type: image/jpeg');
              imagejpeg($resized_image,$logo_path);
              break;
          case 'png':
              $img_r = imagecreatefrompng($request->logo);
              imagealphablending($resized_image, FALSE);
              imagesavealpha($resized_image, TRUE);
              imagecopyresampled($resized_image, $img_r, 0, 0, $request->x,$request->y,$request->w,$request->h,$request->w,$request->h);
              header('Content-type: image/png');
              imagepng($resized_image,$logo_path);
              break;
          case 'gif':
              $img_r = imagecreatefromgif($request->logo);
              imagecopyresampled($resized_image, $img_r, 0, 0, $request->x,$request->y,$request->w,$request->h,$request->w,$request->h);
              $background = imagecolorallocate($resized_image, 0, 0, 0);
              imagecolortransparent($resized_image, $background);
              header('Content-type: image/gif');
              imagegif($resized_image,$logo_path);
              break;
      }*/

    } else {
      $logo = Entity_profile::select('logo')->where('id_user', auth()->id())->first()->logo;
    }

    if($request->hasFile('banner') && $request->file('banner')->isValid()){
      if(Entity_profile::select('banner')->where('id_user', auth()->id())->first()->banner != 'default_entity_banner.jpg'){
        Storage::delete('entity_banner/' . Entity_profile::select('banner')->where('id_user', auth()->id())->first()->banner);
      }
      $banner_path = $request->banner->store('entity_banner');
      $banner = $request->banner->hashName();

      $extension = $request->file('banner')->extension();

      $resized_image = imagecreatetruecolor($request->w, $request->h);
      switch ( $extension )
      {
        case 'jpeg':
          $img_r = imagecreatefromjpeg($request->banner);
          imagecopyresampled($resized_image, $img_r, 0, 0, $request->x,$request->y,$request->w,$request->h,$request->w,$request->h);
          header('Content-type: image/jpeg');
          imagejpeg($resized_image,$banner_path);
          break;
        case 'png':
          $img_r = imagecreatefrompng($request->banner);
          imagealphablending($resized_image, FALSE);
          imagesavealpha($resized_image, TRUE);
          imagecopyresampled($resized_image, $img_r, 0, 0, $request->x,$request->y,$request->w,$request->h,$request->w,$request->h);
          header('Content-type: image/png');
          imagepng($resized_image,$banner_path);
          break;
        case 'gif':
          $img_r = imagecreatefromgif($request->banner);
          imagecopyresampled($resized_image, $img_r, 0, 0, $request->x,$request->y,$request->w,$request->h,$request->w,$request->h);
          $background = imagecolorallocate($resized_image, 0, 0, 0);
          imagecolortransparent($resized_image, $background);
          header('Content-type: image/gif');
          imagegif($resized_image,$banner_path);
          break;
      }
    } else {
      $banner = Entity_profile::select('banner')->where('id_user', auth()->id())->first()->banner;
    }

    $entity = Entity_profile::where('id_user', auth()->id())->update([
        'name' => $request->name,
        'logo' => $logo,
        'banner' => $banner,
        'time_table' => $request->time_table,
        'phone_number' => $request->phone_number,
        'facebook' => $request->facebook,
        'instagram' => $request->instagram,
        'website' => $request->website,
        'address' => $request->address,
        'description' => $request->description,
    ]);

    return redirect('profile');
  }

  public function getProfile($id){
    $auth = User::where('id', $id)->first();

    if($auth->role == 'Persona'){
      $person = User_profile::where('id_user', $id)->first();
      $pets = Pet_profile::where('id_user', $id)->get();

      foreach($pets as $pet){
        $pet->age = PetController::calc($pet);

        if(strlen($pet->description) > 90){
          $pet->short_desc = Str::substr($pet->description, 0, 90) . ' ...';
        } else {
          $pet->short_desc = $pet->description;
        }
      }

      return view('profile', [ 'person' => $person, 'pets' => $pets ]);
    } else {
      $entity = Entity_profile::where('id_user', $id)->first();
      $pets = Pet_profile::where('id_user', $id)->get();

      foreach($pets as $pet){
        $pet->age = PetController::calc($pet);
      }

      return view('entity', ['entity' => $entity, 'entity_name' => $entity->name, 'pets' => $pets]);
    }

  }
}
