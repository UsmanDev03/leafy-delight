<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
    <h2>Thank you for your order, {{ $order->first_name }} {{ $order->last_name }}!</h2>

    <p>We have received your payment and are processing your order.</p>

    <h3>Order Details:</h3>
    <p><strong>Order ID:</strong> {{ $order->id }}</p>
    <p><strong>Total Paid:</strong> ${{ number_format($order->grand_total, 2) }}</p>

    <h3>Shipping Address:</h3>
    <p>{{ $order->street_address }}, {{ $order->apartment }}, {{ $order->city }}, {{ $order->state }}, {{ $order->zip_code }}, {{ $order->country }}</p>

    <h3>Items:</h3>
    <ul>
        @foreach(json_decode($order->cart_items) as $item)
            <li>{{ $item->name }} - {{ $item->quantity }} x ${{ number_format($item->price, 2) }}</li>
        @endforeach
    </ul>

    <p>Thank you for shopping with us!</p>
</body>
</html>
