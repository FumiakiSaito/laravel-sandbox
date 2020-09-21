<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        dump($items);

        return view('person.index', ['items' => $items]);
    }

    public function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }

    public function search(Request $request)
    {
        // idで検索
        //$item = Person::find($request->input);

        // 名前で検索するローカルスコープを使用
        $item = Person::nameEqual($request->input)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }

    public function add(Request $request)
    {
        return view('person.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = new Person;

        //$form = $request->all();
        //$person->fill($form)->save();
        //unset($form['_token']);
        // ↑これは↓と同じ
        $person->name = $request->name;
        $person->mail = $request->name;
        $person->age = $request->age;
        $person->save();

        return redirect('/person');
    }

    public function edit(Request $request)
    {
        $person = Person::find($request->id);
        return view('person.edit', ['form' => $person]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = Person::find($request->id);
        $person->name = $request->name;
        $person->mail = $request->name;
        $person->age = $request->age;
        $person->save();

        return redirect('/person');

    }
}
