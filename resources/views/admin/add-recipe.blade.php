@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add New Recipe</h1> 
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Recipe Details</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('recipes.insert') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="sec1_title">Section 1 Title</label>
                            <input type="text" name="sec1_title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="sec1_date">Section 1 Date</label>
                            <input type="date" name="sec1_date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="sec1_img">Section 1 Image</label>
                            <input type="file" name="sec1_img" class="form-control" accept="image/*" required>
                        </div>

                        <div class="form-group">
                            <label for="sec2_card_desc">Section 2 Card Description</label>
                            <textarea name="sec2_card_desc" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="sec2_card_name">Section 2 Card Name</label>
                            <input type="text" name="sec2_card_name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="sec3_title">Section 3 Title</label>
                            <input type="text" name="sec3_title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="sec3_desc">Section 3 Description</label>
                            <textarea name="sec3_desc" class="form-control" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Save Recipe</button>
                        <a href="{{ url('/recipes') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(document).ready(function() {
        // Initialize Summernote for the section 2 description field
        $('textarea[name="sec3_desc"]').summernote({
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
