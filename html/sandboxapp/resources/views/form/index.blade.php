@extends('layouts.helloapp')
@section('title', 'Form')

@section('menubar')
    @parent
    フォームお試しページ
@endsection

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

    <hr>

    <form action="/form" method="post">
        <table>
            @csrf

            <tr>
                {{-- old()使えば前回値をデフォルト表示 --}}
                <th>名前:</th>
                <td><input type="text" name="name" value="{{old('name')}}"></td>
            </tr>

            {{-- 個別にエラー表示したい場合はこんな感じ --}}
            @if ($errors->has('name'))
                <tr>
                    <th></th>
                    <td>{{$errors->first('name')}}</td>
                </tr>
            @endif

            <tr>
                <th>メールアドレス:</th>
                <td><input type="text" name="mail" value="{{old('mail')}}"></td>
            </tr>

            {{-- Laravel5.8からerrorディレクティブが使える --}}
            @error('mail')
            <tr>
                <th></th>
                <td>{{$message}}</td>
            <tr/>
            @enderror


            <tr>
                <th>年齢:</th>
                <td><input type="text" name="age" value="{{old('age')}}"></td>
            </tr>

            @error('age')
            <tr>
                <th></th>
                <td>{{$message}}</td>
            <tr/>
            @enderror

            <tr>
                <th>IPアドレス:</th>
                <td><input type="text" name="ip" value="{{old('ip')}}"></td>
            </tr>

            @error('ip')
            <tr>
                <th></th>
                <td>{{$message}}</td>
            <tr/>
            @enderror

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
