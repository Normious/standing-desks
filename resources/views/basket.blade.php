@extends('layouts.app')

@section('title', 'basket')

@section('content')
<div class="container">
    <!-- Your content here -->
    <div class="container mt-5">
    <h1 class="text-center mb-4">Your Basket</h1>
    
    @if(session('basket') && count(session('basket')) > 0)
        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(session('basket') as $productId => $details)
                            <tr>
                                <td>{{ $details['name'] }}</td>
                                <td>
                                    <form action="{{ route('basket.update', $productId) }}" method="POST">
                                        @csrf
                                        <input type="number" name="quantity" value="{{ $details['quantity'] }}" min="1" class="form-control" style="width: 70px; display: inline;">
                                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                    </form>
                                </td>
                                <td>{{ number_format($details['price'], 2) }} MWK</td>
                                <td>{{ number_format($details['price'] * $details['quantity'], 2) }} MWK</td>
                                <td>
                                    <form action="{{ route('basket.remove', $productId) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basket Summary</h4>
                        <hr>
                        <p class="card-text">Total Items: {{ count(session('basket')) }}</p>
                        <p class="card-text">Total Price: {{ number_format(array_sum(array_column(session('basket'), 'total')), 2) }} MWK</p>
                        <a href="{{ route('checkout.index') }}" class="btn btn-success btn-block">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    @else
		<div class="alert alert-info text-center">
            Your basket is empty. <a href="{{ route('rising_desks') }}" class="alert-link">Continue shopping</a>
        </div>
    @endif
</div>
</div>
@endsection
