@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update FAQ Page</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        
                        <form action="{{ route('growpage.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group">
                                <label>Banner Title</label>
                                <input type="text" name="banner_title" class="form-control" value="{{ $growpage->banner_title }}">
                            </div>
                            
                            <div class="form-group">
                                <label>Banner Subtitle</label>
                                <input type="text" name="banner_subtitle" class="form-control" value="{{ $growpage->banner_subtitle }}">
                            </div>
                            
                            <div class="form-group">
                                <label>Banner Image</label>
                                <input type="file" name="ban_img" class="form-control">
                                @if($growpage->ban_img)
                                    <img src="{{ asset($growpage->ban_img) }}" width="150" class="mt-2">
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <label>Section 1 Title</label>
                                <input type="text" name="sec1_title" class="form-control" value="{{ $growpage->sec1_title }}">
                            </div>
                            
                            <div class="form-group">
                                <label>Section 1 Description</label>
                                <textarea name="sec1_desc" class="form-control">{{ $growpage->sec1_desc }}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Section 1 Image</label>
                                <input type="file" name="sec1_img" class="form-control">
                                @if($growpage->sec1_img)
                                    <img src="{{ asset($growpage->sec1_img) }}" width="150" class="mt-2">
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <label>Section 2 Subtitle</label>
                                <input type="text" name="sec2_subtitle" class="form-control" value="{{ $growpage->sec2_subtitle }}">
                            </div>
                            
                            <div class="form-group">
                                <label>Section 2 Title</label>
                                <input type="text" name="sec2_title" class="form-control" value="{{ $growpage->sec2_title }}">
                            </div>
                            
                            <div class="form-group">
                                <label>Section 2 Description</label>
                                <textarea name="sec2_desc" class="form-control">{{ $growpage->sec2_desc }}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Section 2 Card Description</label>
                                <textarea name="sec2_card_desc" class="form-control">{{ $growpage->sec2_card_desc }}</textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function() {
        // Initialize Summernote for the section 2 description field
        $('textarea[name="sec1_desc"]').summernote({
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