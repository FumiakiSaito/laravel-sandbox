@extends('layouts.helloapp')
@section('title', 'Index')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます</p>

    {{-- コンポーネントを組み込む --}}
    @component('components.message')
        @slot('msg_title')
        CAUTION!
        @endslot

        @slot('msg_content')
        これはメッセージの表示です。
        @endslot
    @endcomponent

    {{-- サブビューを読み込む --}}
    @include('components.message', ['msg_title' => 'OK', 'msg_content' => 'サブビューです'])

    {{-- サブビューを繰り返す --}}
    @each('components.item', $data, 'item')

    {{-- ビューコンポーザで設定した値を表示 HelloServiceProvider::boot() --}}
    <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
@endsection

@section('footer')
copyright 2020.
@endsection
