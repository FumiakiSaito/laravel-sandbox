<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FormController extends Controller
{
    public function index() {


        return view('form.index', ['msg' => 'フォームを入力']);
    }

    public function post(Request $request)
    {

        // NOTE:
        // Lravel的にはコントローラでバリデーションするより、
        // フォームリクエストを使い、コントローラの前で実行するほうがクールらしい


        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];

        $this->validate($request, $validate_rule);

        return view('form.index', ['msg' => '正しく入力されました！']);
    }
}
