@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
<div class="container">
    @if($products->isEmpty())
        <p class="text-center">No products found.</p>
    @else
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{$product->image}}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>${{ number_format($product->price, 2) }}</strong></p>
                            
                            <!-- Add to Cart Button -->
                            <form action="{{ route('basket.add', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
