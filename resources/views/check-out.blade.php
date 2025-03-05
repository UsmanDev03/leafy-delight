@extends('include.main')
@section('content')
<body>
<style>
         .check-container {
            max-width: 1200px;
            margin: auto;
        }
        h2 {
            font-size: 24px;
        }
        .form-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            gap: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group div {
            width: 48%;
        }
        .checkbox-group {
            margin-top: 10px;
        }
        @media screen and (max-width:600px) {
            .form-group {
                display: block;
            }
            .form-group div {
                width: 100%;
            }
        }
        .order-container {
            max-width: 1200px;
            margin: auto;
            margin-top: 1rem;
        }
        .order-container h2 {
            margin: 1rem 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f9f9f9;
        }
        .total {
            font-weight: bold;
        }
        .order-btn {
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        .order-btn:hover {
            background-color: #45a049;
        }

         /* ✅ Modal Styling */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background: white;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        width: 300px;
    }

    .close {
        float: right;
        font-size: 24px;
        cursor: pointer;
    }
</style>
<div class="container">
    <div class="row">

        <div class="col-md-6">
            <div class="check-container">
                <h2>Billing Details</h2>

                <div class="form-group">
                    <div>
                        <label>First Name *</label>
                        <input type="text" name="f_name" id="f_name">
                    </div>
                    <div>
                        <label>Last Name *</label>
                        <input type="text" name="l_name" id="l_name">
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <label>Select Country *</label>
                        <input name="country" id="country">
                    </div>
                    <div>
                        <label>Select State *</label>
                        <input name="state" id="state">
                    </div>
                    <div>
                        <label>Select City *</label>
                        <input name="city" id="city">
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <label>Street Address *</label>
                        <input type="text" name="street_address" id="street_address">
                    </div>
                    <div>
                        <label>Apartment (optional)</label>
                        <input type="text" name="apartment" id="apartment">
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <label>ZIP Code *</label>
                        <input type="text" name="zip_code" id="zip_code">
                    </div>
                    <div>
                        <label>Phone *</label>
                        <input type="text" name="phone" id="phone">
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <label>Email Address *</label>
                        <input type="email" name="email" id="email">
                    </div>
                </div>

               
            </div>
        </div>

        <div class="col-md-6">
            
            <div class="order-container">
                <h2>Order Details</h2>

                <table class="table table-bordered">
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                    </tr>
                    @php
                        $subTotal = 0;
                        $taxRate = 0.10;
                        $deliveryCharges = session('delivery_charges', 20);
                    @endphp

                    @foreach(session('cart', []) as $item)
                        @php
                            $itemTotal = $item['price'] * $item['quantity'];
                            $subTotal += $itemTotal;
                        @endphp
                        <tr>
                            <td style="display:none">{{ $item['id'] }}</td>
                            <td>{{ $item['name'] }}</td>
                            <td style="display:none">{{ $item['quantity'] }}</td>
                            <td>${{ number_format($itemTotal, 2) }}</td>
                        </tr>
                    @endforeach

                    @php
                        $tax = $subTotal * $taxRate;
                        $grandTotal = $subTotal + $tax + $deliveryCharges;
                    @endphp

                    <tr>
                        <td class="total">Sub Total</td>
                        <td class="total">${{ number_format($subTotal, 2) }}</td>
                    </tr>
                    <tr>
                        <td class="total">Tax (10%)</td>
                        <td class="total">${{ number_format($tax, 2) }}</td>
                    </tr>
                    <tr>
                        <td class="total">Delivery Charges</td>
                        <td class="total">${{ number_format($deliveryCharges, 2) }}</td>
                    </tr>
                    <tr>
                        <td class="total">Grand Total</td>
                        <td class="total" id="grandTotal">${{ number_format($grandTotal, 2) }}</td>
                    </tr>
                </table>
                <div id="card-element"></div>
                <div style="margin:20px 0;" id="card-errors" role="alert"></div>
                <button class="order-btn btn btn-success w-100" id="submitPayment">PLACE ORDER</button>
            </div>
        </div>
    </div>
</div>



<div id="orderSuccessModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Order Placed Successfully!</h2>
        <p>Thank you for your order. You will receive a confirmation email soon.</p>
        <a href="{{ route('index') }}" class="btn btn-primary">Continue Shopping</a>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        let placeOrderBtn = document.getElementById("submitPayment");
        let modal = document.getElementById("orderSuccessModal");
        let closeBtn = document.querySelector(".close");

        placeOrderBtn.addEventListener("click", function () {

            setTimeout(() => {
                modal.style.display = "flex";
            }, 500);
        });

        closeBtn.addEventListener("click", function () {
            modal.style.display = "none";
        });

        window.addEventListener("click", function (event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    });
</script>



<script src="https://js.stripe.com/v3/"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

    var stripe = Stripe("{{ env('STRIPE_KEY') }}");
    var elements = stripe.elements();
    var card = elements.create("card");
    card.mount("#card-element");

    card.addEventListener("change", function(event) {
        var errorDisplay = document.getElementById("card-errors");
        errorDisplay.textContent = event.error ? event.error.message : "";
    });

    $('#submitPayment').click(function(e) {
        e.preventDefault();

        var f_name = $('#f_name').val();
        var l_name = $('#l_name').val();
        var country = $('#country').val();
        var state = $('#state').val();
        var city = $('#city').val();
        var street_address = $('#street_address').val();
    
        var apartment = $('#apartment').val();
        var zip_code = $('#zip_code').val();
        var phone = $('#phone').val();
        var email = $('#email').val();

        let cartItems = [];
        $("table tr").each(function (index) {
            if (index > 0 && index < $("table tr").length - 4) { 
                let productId = $(this).find("td:first").text().trim(); 
                let productName = $(this).find("td:eq(1)").text().trim();
                let quantity = $(this).find("td:eq(2)").text().trim();
                let productPrice = $(this).find("td:last").text().replace("$", "").replace(",", "").trim(); // Last column (Price)

                if (productName && productPrice) {
                    cartItems.push({ id:productId, name: productName, quantity,price: parseFloat(productPrice) });
                }
            }
        });

        let subTotal = $("tr:contains('Sub Total') td:last").text().replace("$", "").replace(",", "").trim();
        let tax = $("tr:contains('Tax') td:last").text().replace("$", "").replace(",", "").trim();
        let deliveryCharges = $("tr:contains('Delivery Charges') td:last").text().replace("$", "").replace(",", "").trim();
        let grandTotal = $("#grandTotal").text().replace("$", "").replace(",", "").trim();

        console.log("Cart Items:", cartItems);
        console.log("Sub Total:", subTotal);
        console.log("Tax:", tax);
        console.log("Delivery Charges:", deliveryCharges);
        console.log("Grand Total:", grandTotal);

        $('#submitPayment').prop("disabled", true);

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                $('#card-errors').text(result.error.message);
                $('#submitPayment').prop("disabled", false);
            } else if (result.token) {
                processPayment(result.token.id, f_name, l_name, city, state, street_address,country, email, phone, zip_code, apartment, cartItems, subTotal, tax, deliveryCharges, grandTotal);
            }
        });

        function processPayment(stripeToken, f_name, l_name, city, state, street_address,country, email, phone, zip_code, apartment, cartItems, subTotal, tax, deliveryCharges, grandTotal) {
            console.log("Processed total amount (cents):", grandTotal);
            
            $.ajax({
                url: '{{ route('order.store') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    stripeToken: stripeToken,
                    f_name: f_name,
                    l_name: l_name,
                    city: city,
                    state: state,
                    country: country,
                    street_address: street_address,
                    email: email,
                    phone: phone,
                    zip_code: zip_code,
                    apartment: apartment,
                    cartItems: cartItems,
                    subTotal: subTotal,
                    tax: tax,
                    deliveryCharges: deliveryCharges,
                    grandTotal: grandTotal,
                },
                success: function(response) {
                    location.reload();
                    if (response.success) {
                        toastr.success("Your order has been placed successfully!");
                        setTimeout(function() {
                            window.location.href = '/';
                        }, 2000);
                        $('#paymentModal').modal('hide');
                    } else {
                        toastr.error(response.message || 'Something went wrong with the payment.');
                        $('#submitPayment').prop("disabled", false);
                    }
                },
                error: function(xhr) {
                    toastr.error(xhr.responseJSON?.message || 'Something went wrong with the request.');
                    $('#submitPayment').prop("disabled", false);
                },
            });
        }
    });




    
</script>

@endsection
