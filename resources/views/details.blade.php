@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$products['gallery']}}"/>
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h2>{{$products['name']}}</h2>
                <h3>Price: {{$products['price']}}</h3>
                <h4>Description: {{$products['description']}}</h4>
                <h4>Category: {{$products['category']}}</h4>
                <br><br>
                <button class="btn btn-primary">Add to Cart</button>
                <button class="btn btn-success">Buy Now</button>

            </div>
        </div>

    </div>
@endsection
