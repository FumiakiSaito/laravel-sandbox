@extends('layouts.helloapp')
@section('title', 'Person')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr>
            <th>Name</th>
            <th>Mail</th>
            <th>Age</th>
            <th></th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->getdata()}}</td>
            </tr>
        @endforeach
    </table>

@endsection

@section('footer')
copyright 2020.
@endsection
