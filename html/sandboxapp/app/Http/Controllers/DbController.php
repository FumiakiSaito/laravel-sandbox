<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    // 一覧画面
    public function index(Request $request)
    {
        $items = DB::table('people')->get();
        return view('db.index', ['items' => $items]);
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $item = DB::table('people')->where('id', $id)->first();

        return view('db.show', ['item' => $item]);
    }

    // 登録画面
    public function add(Request $request)
    {
        return view('db.add');
    }
    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age'  => $request->age,
        ];

        DB::table('people')->insert($param);
        // DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
        return redirect('/db');
    }

    // 編集画面
    public function edit(Request $request)
    {
        // $param = ['id' => $request->id];
        // $item = DB::select('select * from people where id = :id', $param);

        $item = DB::table('people')->where('id', $request->id)->first();

        return view('db.edit', ['form' => $item]);
    }
    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        // DB::update('update people set name =:name, mail = :mail, age = :age where id = :id', $param);
        DB::table('people')->where('id', $request->id)->update($param);

        return redirect('/db');
    }
}
