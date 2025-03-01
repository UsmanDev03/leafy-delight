@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Recipe Page</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('recipe.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Banner Section -->
                            <div class="form-group">
                                <h3>Banner Section</h3>
                                <label for="ban_title">Title:</label>
                                <input type="text" class="form-control" id="ban_title" name="ban_title" value="{{ old('ban_title', $recipePage->ban_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="ban_subttitle">Subtitle:</label>
                                <input type="text" class="form-control" id="ban_subttitle" name="ban_subttitle" value="{{ old('ban_subttitle', $recipePage->ban_subttitle) }}" required>
                            </div>
                            <div class="form-group">
                                <label>Banner Image</label>
                                <input type="file" class="form-control" name="ban_img" accept="image/*">
                                @if ($recipePage->ban_img)
                                    <img src="{{ asset($recipePage->ban_img) }}" class="mt-2 rounded" width="200">
                                @endif
                            </div>

                            <!-- Section 1 -->
                            <h3>Section 1</h3>
                            @foreach([1, 2] as $index)
                                <div class="form-group">
                                    <label for="sec1_card{{ $index }}_title">Card {{ $index }} Title:</label>
                                    <input type="text" class="form-control" id="sec1_card{{ $index }}_title" name="sec1_card{{ $index }}_title" value="{{ old('sec1_card'.$index.'_title', $recipePage->{'sec1_card'.$index.'_title'}) }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Card {{ $index }} Image</label>
                                    <input type="file" class="form-control" name="sec1_card{{ $index }}_img" accept="image/*">
                                    @if ($recipePage->{'sec1_card'.$index.'_img'})
                                        <img src="{{ asset($recipePage->{'sec1_card'.$index.'_img'}) }}" class="mt-2 rounded" width="200">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="sec1_card{{ $index }}_desc">Card {{ $index }} Description:</label>
                                    <textarea class="form-control" id="sec1_card{{ $index }}_desc" name="sec1_card{{ $index }}_desc" rows="4" required>{{ old('sec1_card'.$index.'_desc', $recipePage->{'sec1_card'.$index.'_desc'}) }}</textarea>
                                </div>
                            @endforeach

                            <!-- Section 3 -->
                            <h3>Section 3</h3>
                            <div class="form-group">
                                <label for="sec3_subtitle">Subtitle:</label>
                                <input type="text" class="form-control" id="sec3_subtitle" name="sec3_subtitle" value="{{ old('sec3_subtitle', $recipePage->sec3_subtitle) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec3_title">Title:</label>
                                <input type="text" class="form-control" id="sec3_title" name="sec3_title" value="{{ old('sec3_title', $recipePage->sec3_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec3_desc">Description:</label>
                                <textarea class="form-control" id="sec3_desc" name="sec3_desc" rows="4" required>{{ old('sec3_desc', $recipePage->sec3_desc) }}</textarea>
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