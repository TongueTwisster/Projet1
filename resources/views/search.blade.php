@extends('layouts.app')
@section('content')
<div class="container custom-product">
    <div class="trending-wrapper">
        <h3>Search Result</h3>
        @foreach ($products as $item)
        <div class="searched-item">
            <a href="/details/{{$item['id']}}">
                <img class="trending-image" src="{{$item['gallery']}}"/>
                <h2>{{$item['name']}}</h2>
                <h5>{{$item['description']}}<h5>
            </a>
        </div>
        @endforeach

    </div>

</div>
@endsection
