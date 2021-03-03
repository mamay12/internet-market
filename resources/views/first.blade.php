@extends('layouts.master')

@section('content')
    @foreach($db as $el)
        <p>{{$el->migration}}</p>
    @endforeach
@endsection
