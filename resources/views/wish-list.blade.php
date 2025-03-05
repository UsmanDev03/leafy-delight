@extends('include.main')
@section('content')

<style>
    .parent-container {
        width: 100%;
        display: flex;
        gap: 20px;
        margin: 1rem auto;
    }

    .wishlist-container {
        display: flex;
        gap: 20px;
        background: #fff;
        border-radius: 10px;
        width: 100%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .wishlist-details {
        flex: 2;
        padding: 15px;
    }

    h1, h2 {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .wishlist-item {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #ddd;
        padding: 15px 0;
    }

    .wishlist-item img {
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
    .remove-icon {
        width: 20px;
        cursor: pointer;
    }
</style>

<div class="parent-container container-fluid">
    <div class="wishlist-container">
        <div class="wishlist-details">
            <h1>My Wishlist</h1>

            <div id="wishlist-items">
                @if(session('wishlist') && count(session('wishlist')) > 0)
                    <p id="wishlist-count">{{ count(session('wishlist')) }} items in your wishlist</p>

                    @foreach(session('wishlist') as $key => $item)
                    <div class="wishlist-item" data-key="{{ $key }}">
                        <img src="{{$item['img']}}" alt="Product Image">
                        <div class="item-details">
                            <h2 style="width:450px;">{{ Illuminate\Support\Str::limit($item['name'], 50) }}</h2>
                            <p class="price">${{ number_format($item['price'], 2) }}</p>
                            <button class="remove-item" data-key="{{ $key }}">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6L18 19a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6m4 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    @endforeach

                    <p class="bottom-btn" style="margin-top: 20px;"><a href="{{ url('/') }}">← Back to shop</a></p>
                @else
                    <h3 id="empty-wishlist-message" class="text-center text-muted">Your wishlist is empty 😔</h3>
                    <a href="{{ url('/') }}" style="margin-top: 20px;" class="btn btn-primary">🔙 Go Back to Shop</a>
                @endif
            </div>
        </div>
    </div>
</div>


@endsection
