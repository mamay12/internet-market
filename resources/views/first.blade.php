@extends('master')

@section('content')
    @foreach($db as $el)
        <p>{{$el->name}}</p>
    @endforeach
@endsection
