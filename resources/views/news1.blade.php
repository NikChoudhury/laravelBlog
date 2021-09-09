@extends('layout')
@section("title","News1")
@section('container')
    @parent
    <h1>Breaking News 1</h1>
    <ol>
        <li>
            &#64 yield
        </li>
        <li>
            &#64 section 
        </li>
        <li>
            &#64 endsection 
        </li>
        <li>
         &#64 parent
        </li>
    </ol>
@endsection
