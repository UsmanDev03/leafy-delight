@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Reviews</h1>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ url('/reviews/update', $reviews->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Section 1 -->
                    <div class="form-group">
                        <label>Section 1 Subtitle</label>
                        <input type="text" name="sec1_subtitle" class="form-control" value="{{ old('sec1_subtitle', $reviews->sec1_subtitle) }}">
                    </div>

                    <div class="form-group">
                        <label>Section 1 Title</label>
                        <input type="text" name="sec1_title" class="form-control" value="{{ old('sec1_title', $reviews->sec1_title) }}">
                    </div>
                    <div class="form-group">
                        <label>Section 1 Image</label>
                        <input type="file" name="sec1_img" class="form-control-file">
                        @if($reviews->sec1_img)
                            <img src="{{ asset('uploads/reviews/' . $reviews->sec1_img) }}" alt="Review Image" width="100" class="mt-2">
                        @endif
                    </div>
                    <!-- Section 2 -->
                    <div class="form-group">
                        <label>Section 2 Subtitle</label>
                        <input type="text" name="sec2_subtitle" class="form-control" value="{{ old('sec2_subtitle', $reviews->sec2_subtitle) }}">
                    </div>

                    <div class="form-group">
                        <label>Section 2 Title</label>
                        <input type="text" name="sec2_title" class="form-control" value="{{ old('sec2_title', $reviews->sec2_title) }}">
                    </div>

                    <div class="form-group">
                        <label>Section 2 Description</label>
                        <textarea name="sec2_desc" class="form-control">{{ old('sec2_desc', $reviews->sec2_desc) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Section 2 Button Text</label>
                        <input type="text" name="sec2_btn_txt" class="form-control" value="{{ old('sec2_btn_txt', $reviews->sec2_btn_txt) }}">
                    </div>

                    <div class="form-group">
                        <label>Section 2 Happy Customers Count</label>
                        <input type="number" name="sec2_happy_cus" class="form-control" value="{{ old('sec2_happy_cus', $reviews->sec2_happy_cus) }}">
                    </div>

                    <!-- Section 2 Image Upload -->
                    <div class="form-group">
                        <label>Section 2 Image</label>
                        <input type="file" name="sec2_img" class="form-control-file">
                        @if($reviews->sec2_img)
                            <img src="{{ asset('uploads/reviews/' . $reviews->sec2_img) }}" alt="Review Image" width="100" class="mt-2">
                        @endif
                    </div>

                    <!-- Section 3 -->
                    <div class="form-group">
                        <label>Section 3 Title</label>
                        <input type="text" name="sec3_title" class="form-control" value="{{ old('sec3_title', $reviews->sec3_title) }}">
                    </div>

                    <div class="form-group">
                        <label>Section 3 Description</label>
                        <textarea name="sec3_desc" class="form-control">{{ old('sec3_desc', $reviews->sec3_desc) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Review</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
