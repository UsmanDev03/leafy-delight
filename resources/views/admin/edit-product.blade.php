@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Product</h1>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Product Title</label>
                        <input type="text" name="sec1_title" class="form-control" value="{{ old('sec1_title', $product->sec1_title) }}" required>
                    </div>                    
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="sec1_desc" class="form-control" required>{{ old('sec1_desc', $product->sec1_desc) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Available Stock</label>
                        <input type="number" name="sec2_available_stock" class="form-control" value="{{ old('sec2_available_stock', $product->sec2_available_stock) }}" required>
                    </div>
                    <div class="form-group">
                        <label>Tags</label>
                        <input type="text" name="sec2_tags" class="form-control" value="{{ old('sec2_tags', $product->sec2_tags) }}">
                    </div>
                    <div class="form-group">
                        <label>Discount Price</label>
                        <input type="text" name="discount_price" class="form-control" value="{{ old('discount_price', $product->discount_price) }}">
                    </div>
                    <div class="form-group">
                        <label>Thumbnail Image</label>
                        <input type="file" name="sec3_img1" class="form-control">
                        @if($product->sec3_img1)
                            <img src="{{ asset('storage/' . $product->sec3_img1) }}" width="100" class="mt-2">
                        @endif
                    </div>
                    <div class="row">
                        @if (!empty($product->sec3_imgs))
                            @foreach (json_decode($product->sec3_imgs, true) as $index => $img)
                                <div class="col-md-3">
                                    <img src="{{ asset('storage/' . $img) }}" class="img-fluid rounded shadow mb-2" alt="Product Image" style="width:130px;height:150px " >
                                    <label>
                                        <input type="checkbox" name="remove_existing_imgs[]" value="{{ $img }}">
                                        Remove this image
                                    </label>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group mt-3">
                        <label>Add New Images</label>
                        <input type="file" name="sec3_imgs[]" class="form-control" multiple>
                    </div>
                    @if (!empty($product->sec4_weight_price))
                            @php
                                $weightPriceData = json_decode($product->sec4_weight_price, true);
                            @endphp

                            @foreach ($weightPriceData as $data)
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Weight</label>
                                        <input type="text" name="weight[]" class="form-control" value="{{ $data['weight'] }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Price</label>
                                        <input type="text" name="price[]" class="form-control" value="{{ $data['price'] }}">
                                    </div>
                                </div>
                            @endforeach
                    @endif
                    @if (!empty($product->sec5_tray_price))
                        @php
                            $trayPriceData = json_decode($product->sec5_tray_price, true);
                        @endphp

                        @foreach ($trayPriceData as $data)
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Tray</label>
                                    <input type="text" name="tray[]" class="form-control" value="{{ $data['tray'] }}">
                                </div>

                                <div class="col-md-6">
                                    <label>Tray Price</label>
                                    <input type="text" name="tray_price[]" class="form-control" value="{{ $data['tray_price'] }}">
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <button type="submit" class="btn btn-primary">Update Product</button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
