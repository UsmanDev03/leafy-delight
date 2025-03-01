@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>General Settings</h1> 
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Update Settings</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- Section 1 --}}
                       <!-- <div class="form-group">
                            <label for="sec1_title">Title</label>
                            <input type="text" name="sec1_title" class="form-control" value="{{ $settings->sec1_title ?? '' }}">
                        </div>
                        -->
                        <div class="form-group">
                            <label for="sec1_phone">Phone</label>
                            <input type="text" name="sec1_phone" class="form-control" value="{{ $settings->sec1_phone ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="sec1_email">Email</label>
                            <input type="email" name="sec1_email" class="form-control" value="{{ $settings->sec1_email ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="sec1_address">Address</label>
                            <textarea name="sec1_address" class="form-control">{{ $settings->sec1_address ?? '' }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="sec1_timing">Timing</label>
                            <input type="text" name="sec1_timing" class="form-control" value="{{ $settings->sec1_timing ?? '' }}">
                        </div>

                        {{-- Section 2: Social Links --}}
                        <div class="form-group">
                            <label for="sec2_social_link1">Social Link 1</label>
                            <input type="url" name="sec2_social_link1" class="form-control" value="{{ $settings->sec2_social_link1 ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="sec2_social_link2">Social Link 2</label>
                            <input type="url" name="sec2_social_link2" class="form-control" value="{{ $settings->sec2_social_link2 ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="sec2_social_link3">Social Link 3</label>
                            <input type="url" name="sec2_social_link3" class="form-control" value="{{ $settings->sec2_social_link3 ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="sec2_social_link4">Social Link 4</label>
                            <input type="url" name="sec2_social_link4" class="form-control" value="{{ $settings->sec2_social_link4 ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="sec2_social_link5">Social Link 5</label>
                            <input type="url" name="sec2_social_link5" class="form-control" value="{{ $settings->sec2_social_link5 ?? '' }}">
                        </div>

                        {{-- Section 3 --}}
                        <div class="form-group">
                            <label for="sec3_logo">Logo</label>
                            <input type="file" name="sec3_logo" class="form-control">
                            @if(!empty($settings->sec3_logo))
                                <img src="{{ asset($settings->sec3_logo) }}" alt="Logo" width="100">
                            @endif
                        </div>
                         <div class="form-group">
                            <label for="sec3_logo2">Footer Logo</label>
                            <input type="file" name="sec3_logo2" class="form-control">
                            @if(!empty($settings->sec3_logo2))
                                <img src="{{ asset($settings->sec3_logo2) }}" alt="Logo" width="100">
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="sec3_title">Title</label>
                            <input type="text" name="sec3_title" class="form-control" value="{{ $settings->sec3_title ?? '' }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Update Settings</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(document).ready(function() {
        // Initialize Summernote for the section 2 description field
        $('textarea[name="sec1_title"]').summernote({
            height: 300, // Set the height of the editor
            placeholder: 'Write description here...',
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
        });
        
        // Initialize other Summernote instances similarly if needed
    });
</script>
@endsection
