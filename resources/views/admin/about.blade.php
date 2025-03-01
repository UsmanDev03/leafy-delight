@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update About Page</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Banner Section -->
                            <div class="form-group">
                                <h3>Banner Section</h3>
                                <label for="ban_title">Title:</label>
                                <input type="text" class="form-control" id="ban_title" name="ban_title" value="{{ old('ban_title', $about->ban_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="ban_subtitle">Subtitle:</label>
                                <input type="text" class="form-control" id="ban_subtitle" name="ban_subtitle" value="{{ old('ban_subtitle', $about->ban_subtitle) }}" required>
                            </div>
                            <div class="form-group">
                                <label>Banner Image</label>
                                <input type="file" class="form-control" name="ban_img" accept="image/*">
                                @if ($about->ban_img)
                                    <img src="{{ asset($about->ban_img) }}" class="mt-2 rounded" width="200">
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <h3>Section 1</h3>
                                <label for="sec1_desc">Description:</label>
                                <textarea class="form-control" id="sec1_desc" name="sec1_desc" rows="4" required>{{ old('sec1_desc', $about->sec1_desc) }}</textarea>
                            </div>
                            <div class="form-group">
                               <label for="sec1_link_text">link Text:</label>
                               <input type="text" class="form-control" id="sec1_link_text" name="sec1_link_text" value="{{ old('sec1_link_text', $about->sec1_link_text) }}" required>
                           </div>
                            

                            <!-- Section 1 Counters -->
                            <div class="form-group">
                                <h3>Counters</h3>
                                <label for="sec1_counter1_title">Counter 1 Title:</label>
                                <input type="text" class="form-control" id="sec1_counter1_title" name="sec1_counter1_title" value="{{ old('sec1_counter1_title', $about->sec1_counter1_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec1_counter1_count">Counter 1 Count:</label>
                                <input type="number" class="form-control" id="sec1_counter1_count" name="sec1_counter1_count" value="{{ old('sec1_counter1_count', $about->sec1_counter1_count) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec1_counter2_title">Counter 2 Title:</label>
                                <input type="text" class="form-control" id="sec1_counter2_title" name="sec1_counter2_title" value="{{ old('sec1_counter2_title', $about->sec1_counter2_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec1_counter2_count">Counter 2 Count:</label>
                                <input type="number" class="form-control" id="sec1_counter2_count" name="sec1_counter2_count" value="{{ old('sec1_counter2_count', $about->sec1_counter2_count) }}" required>
                            </div>

                            <!-- Section 2 -->
                            <div class="form-group">
                                <h3>Section 2</h3>
                                <label for="sec2_title">Title:</label>
                                <input type="text" class="form-control" id="sec2_title" name="sec2_title" value="{{ old('sec2_title', $about->sec2_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec2_desc">Description:</label>
                                <textarea class="form-control" id="sec2_desc" name="sec2_desc" rows="4" required>{{ old('sec2_desc', $about->sec2_desc) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="sec2_video_url">Video URL:</label>
                                <input type="text" class="form-control" id="sec2_video_url" name="sec2_video_url" value="{{ old('sec2_video_url', $about->sec2_video_url) }}">
                            </div>
                            <div class="form-group">
                                <label>Section 2 Image</label>
                                <input type="file" class="form-control" name="sec2_img" accept="image/*">
                                @if ($about->sec2_img)
                                    <img src="{{ asset($about->sec2_img) }}" class="mt-2 rounded" width="200">
                                @endif
                            </div>

                            <!-- Section 2 Progress -->
                            <div class="form-group">
                                <h3>Progress Bars</h3>
                                <label for="sec2_progress_title1">Progress Title 1:</label>
                                <input type="text" class="form-control" id="sec2_progress_title1" name="sec2_progress_title1" value="{{ old('sec2_progress_title1', $about->sec2_progress_title1) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec2_progress_num">Progress Value 1:</label>
                                <input type="number" class="form-control" id="sec2_progress_num" name="sec2_progress_num" value="{{ old('sec2_progress_num', $about->sec2_progress_num) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec2_progress_title2">Progress Title 2:</label>
                                <input type="text" class="form-control" id="sec2_progress_title2" name="sec2_progress_title2" value="{{ old('sec2_progress_title2', $about->sec2_progress_title2) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec2_progress_num2">Progress Value 2:</label>
                                <input type="number" class="form-control" id="sec2_progress_num2" name="sec2_progress_num2" value="{{ old('sec2_progress_num2', $about->sec2_progress_num2) }}" required>
                            </div>
                            <!-- Section 2 Cards -->
                            <h3>Section 2</h3>
                            @for ($i = 1; $i <= 4; $i++)
                                <div class="form-group">
                                    <label for="sec2_card{{ $i }}title">Card {{ $i }} Title:</label>
                                    <input type="text" class="form-control" id="sec2_card{{ $i }}title" name="sec2_card{{ $i }}title" value="{{ old('sec2_card'.$i.'title', $about['sec2_card'.$i.'title'] ?? '') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="sec2_card{{ $i }}desc">Card {{ $i }} Description:</label>
                                    <textarea class="form-control" id="sec2_card{{ $i }}desc" name="sec2_card{{ $i }}desc" rows="3" required>{{ old('sec2_card'.$i.'desc', $about['sec2_card'.$i.'desc'] ?? '') }}</textarea>
                                </div>
                            @endfor

                            <!-- Section 3 -->
                            <h3>Section 3</h3>
                            <div class="form-group">
                                <label for="sec3_title">Title:</label>
                                <input type="text" class="form-control" id="sec3_title" name="sec3_title" value="{{ old('sec3_title', $about['sec3_title'] ?? '') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec3_desc">Description:</label>
                                <textarea class="form-control" id="sec3_desc" name="sec3_desc" rows="4" required>{{ old('sec3_desc', $about['sec3_desc'] ?? '') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Section 3 Image</label>
                                <input type="file" class="form-control" name="sec3_img" accept="image/*">
                                @if (!empty($about['sec3_img']))
                                    <img src="{{ asset($about['sec3_img']) }}" class="mt-2 rounded" width="200">
                                @endif
                            </div>
                            
                            <!-- Section 3 Icons -->
                            @for ($i = 1; $i <= 5; $i++)
                                <div class="form-group">
                                    <label for="sec3_icon{{ $i }}_title">Icon {{ $i }} Title:</label>
                                    <input type="text" class="form-control" id="sec3_icon{{ $i }}_title" name="sec3_icon{{ $i }}_title" value="{{ old('sec3_icon'.$i.'_title', $about['sec3_icon'.$i.'_title'] ?? '') }}" required>
                                </div>
                            @endfor
                            <div class="form-group">
                                <label for="sec3_btn_txt">Button Text:</label>
                                <input type="text" class="form-control" id="sec3_btn_txt" name="sec3_btn_txt" value="{{ old('sec3_btn_txt', $about->sec3_btn_txt) }}" required>
                            </div>
                              <!-- Section 4 -->
                              <div class="form-group">
                                <h3>Section 4</h3>
                                <label for="sec4_title">Title:</label>
                                <input type="text" class="form-control" id="sec4_title" name="sec4_title" value="{{ old('sec4_title', $about->sec4_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec4_subtitle">Subtitle:</label>
                                <input type="text" class="form-control" id="sec4_subtitle" name="sec4_subtitle" value="{{ old('sec4_subtitle', $about->sec4_subtitle) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec4_desc">Description:</label>
                                <textarea class="form-control" id="sec4_desc" name="sec4_desc" rows="4" required>{{ old('sec4_desc', $about->sec4_desc) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="sec4_btn_txt">Button Text:</label>
                                <input type="text" class="form-control" id="sec4_btn_txt" name="sec4_btn_txt" value="{{ old('sec4_btn_txt', $about->sec4_btn_txt) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec4_exp_num">Experience Number:</label>
                                <input type="number" class="form-control" id="sec4_exp_num" name="sec4_exp_num" value="{{ old('sec4_exp_num', $about->sec4_exp_num) }}" required>
                            </div>
                            <div class="form-group">
                                <label>Section 4 Image</label>
                                <input type="file" class="form-control" name="sec4_img" accept="image/*">
                                @if ($about->sec4_img)
                                    <img src="{{ asset($about->sec4_img) }}" class="mt-2 rounded" width="200">
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
