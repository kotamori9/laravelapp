@extends('layouts.helloapp')
@section('title','Index')
@section('menuber')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <ul>
    @each('components.item',$data,'item')
  </ul>

@endsection