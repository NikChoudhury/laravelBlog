@extends('layout')
@section("title","Profile")
@section('container')
    <h1>Profile</h1>
    <h2>Name::</h2>
    <h3>{{session('name')}}</h3>
    <a href="/logout">Logout</a>
@endsection