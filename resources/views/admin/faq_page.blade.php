@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update FAQ Page</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('faq.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Banner Section -->
                            <div class="form-group">
                                <h3>Banner Section</h3>
                                <label for="ban_title">Title:</label>
                                <input type="text" class="form-control" id="ban_title" name="ban_title" value="{{ old('ban_title', $faq->ban_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="ban_subttitle">Subtitle:</label>
                                <input type="text" class="form-control" id="ban_subttitle" name="ban_subttitle" value="{{ old('ban_subttitle', $faq->ban_subttitle) }}" required>
                            </div>
                            <div class="form-group">
                                <label>Banner Image</label>
                                <input type="file" class="form-control" name="ban_img" accept="image/*">
                                @if ($faq->ban_img)
                                    <img src="{{ asset($faq->ban_img) }}" class="mt-2 rounded" width="200">
                                @endif
                            </div>

                            <!-- Section 1 -->
                            <div class="form-group">
                                <h3>Section 1</h3>
                                <label for="sec1_title">Title:</label>
                                <input type="text" class="form-control" id="sec1_title" name="sec1_title" value="{{ old('sec1_title', $faq->sec1_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec1_desc">Description:</label>
                                <textarea class="form-control" id="sec1_desc" name="sec1_desc" rows="4" required>{{ old('sec1_desc', $faq->sec1_desc) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="sec1_btn_txt">Button Text:</label>
                                <input type="text" class="form-control" id="sec1_btn_txt" name="sec1_btn_txt" value="{{ old('sec1_btn_txt', $faq->sec1_btn_txt) }}" required>
                            </div>

                            <!-- Section 2 -->
                            <div class="form-group">
                                <h3>Section 2</h3>
                                <label for="sec2_title">Title:</label>
                                <input type="text" class="form-control" id="sec2_title" name="sec2_title" value="{{ old('sec2_title', $faq->sec2_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec2_desc">Description:</label>
                                <textarea class="form-control" id="sec2_desc" name="sec2_desc" rows="4" required>{{ old('sec2_desc', $faq->sec2_desc) }}</textarea>
                            </div>

                            <!-- Contact Information -->
                            <div class="form-group">
                                <h3>Contact Information</h3>
                                <label for="loc">Location:</label>
                                <input type="text" class="form-control" id="loc" name="loc" value="{{ old('loc', $faq->loc) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $faq->phone) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="mail">Email:</label>
                                <input type="email" class="form-control" id="mail" name="mail" value="{{ old('mail', $faq->mail) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="timing">Timing:</label>
                                <input type="text" class="form-control" id="timing" name="timing" value="{{ old('timing', $faq->timing) }}" required>
                            </div>

                            <!-- Section 3 -->
                            <div class="form-group">
                                <h3>Section 3</h3>
                                <label for="sec3_subtitle">Subtitle:</label>
                                <input type="text" class="form-control" id="sec3_subtitle" name="sec3_subtitle" value="{{ old('sec3_subtitle', $faq->sec3_subtitle) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec3_title">Title:</label>
                                <input type="text" class="form-control" id="sec3_title" name="sec3_title" value="{{ old('sec3_title', $faq->sec3_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec3_btn_txt">Button Text:</label>
                                <input type="text" class="form-control" id="sec3_btn_txt" name="sec3_btn_txt" value="{{ old('sec3_btn_txt', $faq->sec3_btn_txt) }}" required>
                            </div>
                            <div class="form-group">
                                <label>Section 3 Image</label>
                                <input type="file" class="form-control" name="sec3_img" accept="image/*">
                                @if ($faq->sec3_img)
                                    <img src="{{ asset($faq->sec3_img) }}" class="mt-2 rounded" width="200">
                                @endif
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
