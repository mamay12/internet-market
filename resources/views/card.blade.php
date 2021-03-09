@extends('layouts.master')

@section('content')
    <div class="cards">
        @foreach($products as $product)
            <div class="card">
                <img class="card-img-top" src="{{asset($product->image)}}" alt="Card image not found" style="height: 286px; width: 286px;">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <a href="/cards/{{$product->code}}" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
