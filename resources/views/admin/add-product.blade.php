@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add New Product</h1> 
        </div> 

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="form-group col-lg-4 col-md-6">
                            <label>Title</label>
                            <input type="text" name="sec1_title" class="form-control" required>
                        </div>

                       
                        <div class="form-group col-lg-4 col-md-6">
                            <label>Description</label>
                            <textarea name="sec1_desc" class="form-control" required></textarea>
                        </div>

                        <div class="form-group col-lg-4 col-md-6">
                            <label>Available Stock</label>
                            <input type="text" name="sec2_available_stock" class="form-control" required>
                        </div>
                        <div class="form-group col-lg-2 col-md-3">
                            <label>Tags</label>
                            <input type="text" name="sec2_tags" class="form-control">
                        </div>
                        <div class="form-group col-lg-2 col-md-3">
                            <label>Discount Price</label>
                            <input type="text" name="discount_price" class="form-control">
                        </div>

                        <div class="form-group col-lg-4 col-md-6">
                            <label>Thumbnail Image</label>
                            <input type="file" name="sec3_img1" class="form-control">
                        </div>

                        <div class="form-group col-lg-4 col-md-6">
                            <label>Product Images</label>
                            <input type="file" name="sec3_imgs[]" multiple   class="form-control">
                        </div>
                       
                    </div>
           
                    <div class="row">
                        <div class="col-md-6">
                                <h4>Weight & Price</h4>
                                <button type="button" class="btn btn-primary mt-2" id="add-weight-price">Add More</button>
                            </div>
                            <div class="col-md-6">
                            <h4>Tray & Price</h4>
                                <button type="button" class="btn btn-primary mt-2" id="add-tray-price">Add More</button>
                            </div>
                            <!-- Weight & Price Section -->
                            <div class="col-md-6">
                            
                                <div id="weight-price-fields"></div>
                            </div>

                            <!-- Tray & Price Section -->
                            <div class="col-md-6">
                            
                                <div id="tray-price-fields"></div>
                            </div>

                            <!-- Add More Buttons -->

                    </div>

                    <button type="submit" class="btn btn-primary">Save Product</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Add Weight & Price Row
        $("#add-weight-price").on('click', function () {
            let html = `
                <div class="row align-items-start mb-2 weight-price-row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Weight</label>
                            <input type="text" name="weight[]" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price[]" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-2 mt-2">
                        <button type="button" class="btn btn-danger remove-weight-price" style="margin-top:23px;" >Remove</button>
                    </div>
                </div>`;

            $("#weight-price-fields").append(html);
        });

        // Remove Weight & Price Row
        $(document).on("click", ".remove-weight-price", function () {
            $(this).closest(".weight-price-row").remove();
        });

        // Add Tray & Tray Price Row
        $("#add-tray-price").on('click', function () {
            let html = `
                <div class="row align-items-start mb-2 tray-price-row" ">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tray</label>
                            <input type="text" name="tray[]" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tray Price</label>
                            <input type="text" name="tray_price[]" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-2 mt-2">
                        <button type="button" class="btn btn-danger remove-tray-price" style="margin-top:23px;" >Remove</button>
                    </div>
                </div>`;

            $("#tray-price-fields").append(html);
        });

        // Remove Tray & Tray Price Row
        $(document).on("click", ".remove-tray-price", function () {
            $(this).closest(".tray-price-row").remove();
        });
    });
</script>

<!-- Dynamic Fields Container -->






@endsection
