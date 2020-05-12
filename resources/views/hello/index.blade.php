@extends('layouts.helloapp')
@section('title','Index')
@section('menuber')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>{{$msg}}</p>
  @if(count($errors)>0)
  <div>
    <ul>
      @foreach ($errors->all() as $errors)
        <li>{{$errors}}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form action="/hello" method="post">
  <table>
    @csrf
    <tr><th>name: </th><td><input type="text"
      name="name"></td></tr>
    <tr><th>mail: </th><td><input type="text"
      name="mail"></td></tr>
    <tr><th>age: </th><td><input type="text"
      name="age"></td></tr>
    <tr><th></th><td><input type="submit"
      val="send"></td></tr>
  </table>
  </form>
@endsection