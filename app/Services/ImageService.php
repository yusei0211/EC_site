<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use InterventionImage;

class ImageService
{
    public static function upload($imageFile,$folderName){
         $fileName = uniqid(rand().'_'); //ユニークidとランダム関数を用いてランダムなファイル名を作成
        //     $extension = $imageFile->extension(); 
        //     $fileNameToStore = $fileName. '.' . $extension; //作ったファイル名と拡張子をくっつけて変数に入れる
        //     $resizedImage = InterventionImage::make($imageFile)->resize(1920, 1080)->encode();//型の違いのため
        //      Storage::put('public/' . $folderName . '/' . $fileNameToStore, $resizedImage );

        return $fileNameToStore;
    }
}