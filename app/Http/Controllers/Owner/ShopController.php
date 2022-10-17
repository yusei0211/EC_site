<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use InterventionImage;
use App\Http\Requests\UploadImageRequest;
use App\Services\ImageSrvice;

class ShopController extends Controller
{
    public function __construct()//ログインしているかの確認
     {
         $this->middleware('auth:owners');//middleware()で承認させたものを通したい場合は('auth:admin')と記述
         
         $this->middleware(function ($request, $next){
             //dd($request->route()->parameter('shop'));//数値ではなく文字列
             //dd(Auth::id());//数値
             
             $id = $request->route()->parameter('shop'); //shopのid取得
            if(!is_null($id)){ // null判定
                 $shopsOwnerId = Shop::findOrFail($id)->owner->id;
                 $shopId = (int)$shopsOwnerId; // キャスト 文字列→数値に型変換
                 $ownerId = Auth::id();
                 if($shopId !== $ownerId){ // 同じでなかったら
                 abort(404); // 404画面表示
                 }
             }
             
             return $next($request);
         });
         
     }
     
     public function index()
    {
        //$ownerId = Auth::id();
        //echo phpinfo();
        
        $shops = Shop::where('owner_id', Auth::id())->get();//shop IDで検索したものをgetで取り出す
        
        return view('owner.shops.index',
        compact('shops'));
    }
    
    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        //dd(Shop::findOrFail($id));
        return view('owner.shops.edit',compact('shop'));
    }
    
    public function update(UploadImageRequest $request, $id)
    {
         $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'information' => ['required', 'string', 'email', 'max:1000'],
            'is_selling' => ['required'],
        ]);
        //$fileNameToStoreImageSrvice::upload($imageFile,'shops');
        //画像保存処理
        $imageFile = $request->image; //一時保存
        // if(!is_null($imageFile) && $imageFile->isValid() ){
        //      //Storage::putFile('public/shops', $imageFile);//リサイズ無しの場合
        //     //dd($imageFile,$resizedImage);
            
        $owner = Shop::findOrFail($id);
        $shop->name = $request->name;
        $shop->information = $request->information;
        $shop->is_selling = $request->is_selling;
        
        if(!is_null($imageFile) && $imageFile->isValid()){
            $shop->filename->$fileNameToStore;
        }
       
       $shop->save();
       
        //  } 
         //リサイズ無しの場合
         
         if(!is_null($imageFile) && $imageFile->isValid() ){ 
         Storage::putFile('public/shops', $imageFile); 
         } 

         return redirect()
         ->route('owner.shops.index')
         ->with(['message'=>'店舗情報を更新しました.',
        'status' => 'info'
        ]);
    }
    
    
}
