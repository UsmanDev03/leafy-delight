@extends('include.main')
@section('content')

<style>
         .parent-container {
            width: 100%;
            /* margin: auto; */
            display: flex;
            gap: 20px;
            margin: 1rem auto;
        }

        .cart-container {
            display: flex;
            gap: 20px;
            background: #fff;
            /* padding: 20px; */
            border-radius: 10px;
            width: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cart-details {
            flex: 2;
            padding: 15px;
        }

        .cart-summary {
            flex: 1;
            background: #e6fff6;
            padding: 20px;
            /* border-radius: 10px; */
        }

        h1, h2 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }

        .cart-item img {
            width: 70px;
            height: 70px;
            border-radius: 5px;
            margin-right: 15px;
        }

        .item-details {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .item-details h2 {
            font-size: 24px;
        }
        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-top: 5px;
        }

        .quantity-selector button {
            background: none;
            border: 1px solid #ddd;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 16px;
        }

        .quantity-selector input {
            width: 30px;
            text-align: center;
            border: 1px solid #ddd;
            padding: 5px;
        }
        select, input {
            padding: 8px;
            border: none;
        }
        .input-relative {
            position: relative;
        }
        .input-relative button {
            position: absolute;
            right: 0;
            background-color: #034731;
            color: #fff;
            border: none;
            padding: 8px 10px;
            border-radius: 20px 0 0px 20px;
        }
        .last-div {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }
        .last-div p {
            margin: 0;
            font-weight: 600;
        }
        .last-div img {
            width: 28px !important;
            margin-left: 15px;
        }
        .delete-icon {
            width: 20px;
            cursor: pointer;
        }

        .cart-summary p {
            display: flex;
            justify-content: space-between;
            margin: 40px 0;
            font-weight: 600;
            font-size: 16px;
            align-items: center;
        }

        .grand-total {
            font-size: 18px;
            font-weight: bold;
        }

        .checkout {
            width: 100%;
            padding: 15px;
            background: #034731 !important; 
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            transition: all .3s ease-in-out;
        }

        .checkout:hover {
            background: #000000 !important;
        }
        .bottom-btn a {
            color: rgb(8, 95, 8);
            margin-top: 12px; 
            margin-top: 14px;
            display: block;
        }
        input {
            width: 235px;
        }
        @media (max-width: 1100px) { 
            select, input {
                font-size: 14px;
            }
            input {
                width: unset;
            }
            select, input {
                width: 65%;
            }
        }

        @media (max-width: 1024px) { 
            select, input {
                font-size: 14px;
            }
            select, input {
                font-size: 13px;
            }
        }

        @media (max-width: 992px) { 
            select, input {
                font-size: 14px;
            }
            select, input {
                font-size: 13px;
                width: 60%;
            }
            .cart-summary p {
                font-size: 14px;
                align-items: center;
            }
            .cart-item {
                flex-wrap: wrap;
            }
        }

        @media (max-width: 768px) {
            .container-fluid {
                flex-direction: column;
            }
            .cart-container {
                flex-direction: column;
            }
        }

        @media (max-width: 476px) {
            .item-details {
            place-items: normal;
            display: grid;
            }
            .last-div {
            margin-top:0;}
            .cart-summary p {
                    font-size: 14px;
            }
        }
         @media (max-width: 360px) { 
            select, input {
                padding: 3px;
                }
         }

</style>


<div class="parent-container container-fluid">
    <div class="cart-container">
        <!-- Left Cart Section -->
        <div class="cart-details">
            <h1>Shopping Cart</h1>

            <div id="cart-items">
                @if(session('cart') && count(session('cart')) > 0)
                    <p id="cart-count">{{ count(session('cart')) }} items in your cart</p>

                    @foreach(session('cart') as $key => $item)
                    <div class="cart-item" data-key="{{ $key }}">
                        <img src="{{ $item['image'] }}" alt="Product Image">
                        <div class="item-details">
                            <h2 style="width:450px;">{{ Illuminate\Support\Str::limit($item['name'], 50) }}</h2>

                            <!-- Quantity Update -->
                            <div class="quantity-selector">
                                <button class="decrease" data-key="{{ $key }}">-</button>
                                <input type="text" class="quantity" data-key="{{ $key }}" value="{{ $item['quantity'] }}" readonly>
                                <button class="increase" data-key="{{ $key }}">+</button>
                            </div>

                            <!-- Price & Remove -->
                            <div class="last-div">
                                <p class="price" data-key="{{ $key }}">${{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                                <button class="remove-item" data-key="{{ $key }}">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6L18 19a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6m4 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                            </button>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <p class="bottom-btn"><a href="{{url('/')}}">← Back to shop</a></p>
                
                @else
                    <h3 id="empty-cart-message" class="text-center text-muted">Your cart is empty 😔</h3>
                    <a href="/" class="btn btn-primary">🔙 Go Back to Shop</a>
                @endif
            </div>
        </div>

        <!-- Right Summary Section -->
        <div class="cart-summary">
            <h2>Summary</h2>
            <p>ITEMS <span id="totalAmount">${{ array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], session('cart', []))) }}</span></p>
            <p>SHIPPING 
                <select id="shipping">
                    <option value="5">Standard Delivery - $5.00</option>
                    <option value="10">Express Delivery - $10.00</option>
                </select>
            </p>
            <p class="grand-total">TOTAL PRICE <span id="grandTotal">${{ array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], session('cart', []))) + 5 }}</span></p>
            <a href="{{route('check-out')}}" class="checkout">CHECKOUT</a>
        </div>
    </div>
</div>


<script>document.addEventListener("DOMContentLoaded", function () {

document.querySelectorAll(".increase, .decrease").forEach(button => {
    button.addEventListener("click", function () {
        let key = this.getAttribute("data-key");
        let quantityInput = document.querySelector(`.quantity[data-key='${key}']`);
        let newQuantity = parseInt(quantityInput.value);

        if (this.classList.contains("increase")) {
            newQuantity++;
        } else if (this.classList.contains("decrease") && newQuantity > 1) {
            newQuantity--;
        }

        fetch("{{ route('cart.update') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ key, quantity: newQuantity })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                quantityInput.value = newQuantity;
                document.querySelector(`.price[data-key='${key}']`).textContent = "$" + data.newTotal.toFixed(2);
                document.getElementById("totalAmount").textContent = "$" + data.grandTotal.toFixed(2);
                updateGrandTotal();
            }
        })
        .catch(error => console.error("Error:", error));
    });
});


document.querySelectorAll(".remove-item").forEach(button => {
    button.addEventListener("click", function () {
        let key = this.getAttribute("data-key");
        let cartItem = document.querySelector(`.cart-item[data-key='${key}']`);


        if (confirm("Are you sure you want to remove this item from your cart?")) {
            fetch("{{ route('cart.remove') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ key })
            })
            .then(response => response.json())
            .then(data => {
                location.reload();
                if (data.success) {
                    cartItem.remove();
                    document.getElementById("totalAmount").textContent = "$" + data.grandTotal.toFixed(2);
                    updateGrandTotal();

                    let remainingItems = document.querySelectorAll(".cart-item").length;
                    document.getElementById("cart-count").textContent = remainingItems + " items in your cart";

                    
                    if (remainingItems === 0) {
                        document.getElementById("cart-items").innerHTML = `<h3 id="empty-cart-message" class="text-center text-muted">Your cart is empty 😔</h3><a href="/" class="btn btn-primary">🔙 Go Back to Shop</a>`;
                    }

                   
                }
            })
            .catch(error => console.error("Error:", error));
        }
    });
});

// ✅ **Update Grand Total Based on Shipping**
document.getElementById("shipping").addEventListener("change", updateGrandTotal);

function updateGrandTotal() {
    let totalAmount = parseFloat(document.getElementById("totalAmount").textContent.replace("$", ""));
    let shippingCost = parseFloat(document.getElementById("shipping").value);
    document.getElementById("grandTotal").textContent = "$" + (totalAmount + shippingCost).toFixed(2);
}

});

</script>

@endsection
