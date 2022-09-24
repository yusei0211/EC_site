<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    //app/Providers/RouteServiceProviderのas()で設定してある
    protected $user_route = 'user.login';//ユーザーのログイン画面に遷移
    protected $owner_route = 'owner.login';//オーナーのログイン画面に遷移
    protected $admin_route = 'admin.login';//アドミンのログイン画面に遷移
    
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if(Route::is('owner.*')){
                return route($this->owner_route);//オーナーでログインしてなかったらオーナーのログイン画面に遷移
            }elseif(Route::is('admin.*')){
                return route($this->admin_route);//アドミンーでログインしてなかったらアドミンのログイン画面に遷移
            }else{
                return route($this->user_route);//ユーザーでログインしてなかったらユーザーのログイン画面に遷移
            }
        }
    }
}
