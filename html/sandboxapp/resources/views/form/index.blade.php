@extends('layouts.helloapp')
@section('title', 'Form')

@section('content')

    <p>{{$msg}}</p>

    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/form" method="post">
        <table>
            @csrf

            {{-- 個別にエラー表示したい場合はこんな感じ --}}
            @if ($errors->has('name'))
                <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
            @endif

            <tr>
                {{-- old()使えば前回値をデフォルト表示 --}}
                <th>name:</th>
                <td><input type="text" name="name" value="{{old('name')}}"></td>
            </tr>


            {{-- Laravel5.8からerrorディレクティブが使える --}}
            @error('mail')
            <tr>
                <th>ERROR</th>
                <td>{{$message}}</td>
            <tr/>
            @enderror

            <tr>
                <th>mail:</th>
                <td><input type="text" name="mail" value="{{old('mail')}}"></td>
            </tr>
            <tr>
                <th>age:</th>
                <td><input type="text" name="age" value="{{old('age')}}"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
copyright 2020.
@endsection
