<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use InterventionImage;
use Cloudinary;

class ImageService
{
  public static function upload($imageFile, $folderName){
    //dd($imageFile['image']);
    //画像が配列で渡ってくるか否かの処理
    if(is_array($imageFile))
    {
      $file = $imageFile['image'];
    } else {
      $file = $imageFile;
    }

    // $fileName = uniqid(rand().'_');
    // $extension = $file->extension();
    // $fileNameToStore = $fileName. '.' . $extension;
    // //$resizedImage = InterventionImage::make($file)->resize(1920, 1080)->encode();
    // // Storage::put('public/' . $folderName . '/' . $fileNameToStore, $file );//Storage::putだとうまくいかなかった
    // Storage::putFileAs('public/' . $folderName . '/' , $file, $fileNameToStore );
    $image_url = Cloudinary::upload($file->getRealPath())->getSecurePath();//編集
    //dd($image_url);  //画像のURLを画面に表示
    //return $fileNameToStore;
    return $image_url;
  }
}