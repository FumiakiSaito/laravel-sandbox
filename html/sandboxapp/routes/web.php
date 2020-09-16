<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ビューを使う
Route::get('/', function () {
    return view('welcome');
});

// HTMLを直接返す
Route::get('test', function () {
    return '<html><body><h1>test</h1><p>This is sample page.</p></body></html>';
});

// ヒアドキュメントを使う
$html = <<<EOF
<html>
<body>
<h1>test2</h1>
<p>これはヒアドキュメントを使ったサンプルページです</p>
</body>
</html>
EOF;
Route::get('test2', function () use ($html) {
    return $html;
});

// パラメータを使う
Route::get('test3/{msg}', function ($msg) use ($html) {
$html = <<<EOF
<html>
<h1>test3</h1>
<p>{$msg}</p>
<p>これはパラメータを使ったサンプルページです</p>
</html>
EOF;
    return $html;
});

// 任意パラメータを使用
Route::get('test4/{msg?}', function ($msg = 'no message.') use ($html) {
    $html = <<<EOF
<html>
<h1>test4</h1>
<p>{$msg}</p>
<p>これは任意パラメータを使ったサンプルページです</p>
</html>
EOF;
    return $html;
});

// コントローラを使用
// コントローラ名@アクション名
Route::get('hello/{id?}/{pass?}', 'HelloController@index');

