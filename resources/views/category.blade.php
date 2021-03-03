@extends('layouts.master')

@section('content')
    <h2>{{$category->name}}</h2>
    <h4>Описание: <br>{{$category->description}}</h4>
@endsection

