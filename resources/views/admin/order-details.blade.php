@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Order Details</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Order #{{ $order->id }} Details</h4>
                </div>

                <div class="card-body">
                    <h5>Customer Information</h5>
                    <p><strong>Name:</strong> {{ $order->first_name }} {{ $order->last_name }}</p>
                    <p><strong>Email:</strong> {{ $order->email }}</p>
                    <p><strong>Phone:</strong> {{ $order->phone }}</p>
                    <p><strong>Address:</strong> {{ $order->country }} , {{ $order->state }} , {{ $order->city }}  , {{ $order->street_address }}</p>

                    <h5 class="mt-4">Order Items</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                           
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $orderItems = json_decode($order->cart_items, true); // Decode JSON to an associative array
                        @endphp

                        @foreach($orderItems as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>${{ $item['price'] }}</td>
                            
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <h5 class="mt-4">Order Summary</h5>
                    <table class="table">
                        <tr>
                            <td><strong>Subtotal:</strong></td>
                            <td>${{ number_format($order->sub_total, 2) }}</td>
                        </tr>
                        <tr>
                            <td><strong>Tax (10%):</strong></td>
                            <td>${{ number_format($order->tax, 2) }}</td>
                        </tr>
                        <tr>
                            <td><strong>Delivery Charges:</strong></td>
                            <td>${{ number_format($order->delivery_charges, 2) }}</td>
                        </tr>
                        <tr>
                            <td><strong>Grand Total:</strong></td>
                            <td><strong>${{ number_format($order->grand_total, 2) }}</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Status:</strong></td>
                            <td><span class="badge badge-info">{{ ucfirst($order->status) }}</span></td>
                        </tr>
                    </table>

                    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to Orders</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
