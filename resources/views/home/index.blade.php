@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/game.png') }}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/safe.png') }}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/submarine.png') }}" class="img-fluid rounded">
</div>
<div class="row">
    @foreach ($viewData["products"] as $product)
    <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
        <h5 class="card-title">
            {{ $product->getName() }} (${{ $product->getPrice() }})
            </h5>
        <img src="{{ asset('/storage/'.$product->getImage()) }}" class="card-img-top">
    <div class="card-body text-center">
    <a href="{{ route('product.show', ['id'=> $product->getId()]) }}"
    class="btn bg-primary text-white">{{ $product->getName() }}</a>
    </div>
    </div>
    </div>
    @endforeach
    </div>
</div>
@endsection