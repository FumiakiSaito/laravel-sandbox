<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
          // ビュー指定、関数またはクラス
          'hello.index', function($view) {
              // ビューにview_messageという名前で、composer messageという値を設定
              $view->with('view_message', 'composer message');
            }
        );
    }
}
