<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

// ユーザが未認証の場合のリダイレクト処理
class Authenticate extends Middleware
{
    // RouteServiceProvider.phpで「as('owner.')」とか「as('admin.')」を設定したのと関係がある、らしい（意味不明）
    protected $user_route = 'user.login';
    protected $owner_route = 'owner.login';
    protected $admin_route = 'admin.login';

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // owner関連のURLでownerでログインしていなかったらownerのログインページにリダイレクト
            if(Route::is('owner.*')){
                return route($this->owner_route);
                // owner関連のURLでadminでログインしていなかったらadminのログインページにリダイレクト
            } elseif(Route::is('admin.*')){
                return route($this->admin_route);
            } else {
                return route($this->user_route);
            }
        }
    }
}
