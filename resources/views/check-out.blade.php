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
<form id="" >

    <div class="check-container container">
    
        <h2>Billing details</h2>
        
        <div class="form-group">
            <div>
                <label>First name *</label>
                <input type="text" name="f_name" id="f_name">
            </div>
            <div>
                <label>Last name *</label>
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
                <input name="state" id="state" >
                
            </div>
            <div>
                <label>Select City *</label>
                <input name="city" id="city">
           
            </div>
        </div>
        
        <div class="form-group">
            <div>
                <label>Street address *</label>
                <input type="text" name="street_address" id="address" placeholder="House number and street name">
            </div>
            <div>
                <label>Apartment, suite, unit (optional)</label>
                <input type="text" name="apartment" id="apartment" placeholder="Apartment, suite, unit, etc. (optional)">
            </div>
        </div>
        
        <div class="form-group">
            <div>
                <label>ZIP Code *</label>
                <input type="text" name="zip_code" id="zip_code">
            </div>
            <div>
                <label>Phone *</label>
                <input type="text" name="phone" id="phone" placeholder="(656) 565-6565">
            </div>
        </div>
        
        <div class="form-group">
            <div>
                <label>Email address *</label>
                <input type="email" name="email" id="email">
            </div>
        </div>
        
        <div id="card-element"></div>
        <div id="card-errors" role="alert"></div>
        <div class="order-container">
    <h2>Orders detail</h2>
    <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
        </tr>
        @php
            $subTotal = 0;
            $taxRate = 0.10; // 10% Tax
            $deliveryCharges = session('delivery_charges', 20); // Default $20
        @endphp

        @foreach(session('cart', []) as $item)
            @php
                $itemTotal = $item['price'] * $item['quantity'];
                $subTotal += $itemTotal;
            @endphp
            <tr>
                <td>{{ $item['name'] }}</td>
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

    <button class="order-btn" id="submitPayment">PLACE ORDER</button>
</div>
</form>
<!-- ✅ Order Success Popup Modal -->
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
        let placeOrderBtn = document.getElementById("placeOrderBtn");
        let modal = document.getElementById("orderSuccessModal");
        let closeBtn = document.querySelector(".close");

        placeOrderBtn.addEventListener("click", function () {
            // Show modal after placing the order
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
    // Initialize Stripe
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
                let productName = $(this).find("td:first").text().trim();
                let productPrice = $(this).find("td:last").text().replace("$", "").replace(",", "").trim();
                if (productName && productPrice) {
                    cartItems.push({ name: productName, price: parseFloat(productPrice) });
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
                processPayment(result.token.id, f_name, l_name, city, state, country, email, phone, zip_code, apartment, cartItems, subTotal, tax, deliveryCharges, grandTotal);
            }
        });

        function processPayment(stripeToken, f_name, l_name, city, state, country, email, phone, zip_code, apartment, cartItems, subTotal, tax, deliveryCharges, grandTotal) {
           // let amountInCents = Math.round(parseFloat(grandTotal) * 100);

            console.log("Processed total amount (cents):", grandTotal);
            f_name = "RRRR";
            $.ajax({
                url: '{{ route('order.store') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    stripeToken: stripeToken, // ✅ Sending Stripe token
                    f_name: f_name,
                    l_name: l_name,
                    city: city,
                    state: state,
                    country: country,
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
