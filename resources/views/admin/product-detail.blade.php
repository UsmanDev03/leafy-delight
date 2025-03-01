@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Product Details</h1>  
        </div> 

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $product->sec1_title }}</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Discount Price:</strong> ${{ $product->sec1_del_price }} <br>
                            <strong>Price:</strong> ${{ $product->sec1_price }} <br>
                            <strong>Stock:</strong> {{ $product->sec2_available_stock }} <br>
                            <strong>Category:</strong> {{ $product->sec2_category }} <br>
                            <strong>Tags:</strong> {{ $product->sec2_tags ?? 'N/A' }} <br>
                            <strong>Description:</strong> <p>{{ $product->sec1_desc }}</p>
                        </div>

                        <div class="col-md-6">
                            <strong>Product Images:</strong>
                            <div class="row mt-2">
                                @if ($product->sec3_img1)
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/' . $product->sec3_img1) }}" class="img-fluid rounded" alt="Image 1">
                                    </div>
                                @endif
                                @if ($product->sec3_img2)
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/' . $product->sec3_img2) }}" class="img-fluid rounded" alt="Image 2">
                                    </div>
                                @endif
                                @if ($product->sec3_img3)
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/' . $product->sec3_img3) }}" class="img-fluid rounded" alt="Image 3">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
