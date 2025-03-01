@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Testimonial Page</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('testi.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Banner Section -->
                            <div class="form-group">
                                <h3>Banner Section</h3>
                                <label for="ban_title">Title:</label>
                                <input type="text" class="form-control" id="ban_title" name="ban_title" value="{{ old('ban_title', $testiPage->ban_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="ban_subtitle">Subtitle:</label>
                                <input type="text" class="form-control" id="ban_subtitle" name="ban_subtitle" value="{{ old('ban_subtitle', $testiPage->ban_subtitle) }}" required>
                            </div>
                            <div class="form-group">
                                <label>Banner Image</label>
                                <input type="file" class="form-control" name="ban_img" accept="image/*">
                                @if ($testiPage->ban_img)
                                    <img src="{{ asset($testiPage->ban_img) }}" class="mt-2 rounded" width="200">
                                @endif
                            </div>

                            <!-- Section 1 -->
                            <div class="form-group">
                                <h3>Section 1</h3>
                                <label for="sec1_title">Title:</label>
                                <input type="text" class="form-control" id="sec1_title" name="sec1_title" value="{{ old('sec1_title', $testiPage->sec1_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec1_subtitle">Subtitle:</label>
                                <input type="text" class="form-control" id="sec1_subtitle" name="sec1_subtitle" value="{{ old('sec1_subtitle', $testiPage->sec1_subtitle) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec1_desc">Description:</label>
                                <textarea class="form-control" id="sec1_desc" name="sec1_desc" rows="4" required>{{ old('sec1_desc', $testiPage->sec1_desc) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="sec1_btn_txt">Button Text:</label>
                                <input type="text" class="form-control" id="sec1_btn_txt" name="sec1_btn_txt" value="{{ old('sec1_btn_txt', $testiPage->sec1_btn_txt) }}" required>
                            </div>
                            <div class="form-group">
                                <label>Section 1 Image</label>
                                <input type="file" class="form-control" name="sec1_img" accept="image/*">
                                @if ($testiPage->sec1_img)
                                    <img src="{{ asset($testiPage->sec1_img) }}" class="mt-2 rounded" width="200">
                                @endif
                            </div>

                            <!-- Section 2 -->
                            <div class="form-group">
                                <h3>Section 2</h3>
                                <label for="sec2_title">Title:</label>
                                <input type="text" class="form-control" id="sec2_title" name="sec2_title" value="{{ old('sec2_title', $testiPage->sec2_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec2_desc">Description:</label>
                                <textarea class="form-control" id="sec2_desc" name="sec2_desc" rows="4" required>{{ old('sec2_desc', $testiPage->sec2_desc) }}</textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
