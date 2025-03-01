@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Contact Page</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('contact.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <h3>Banner Section</h3>
                                <label for="banner_title">Title:</label>
                                <input type="text" class="form-control" id="banner_title" name="banner_title" value="{{ old('banner_title', $contact->banner_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="banner_subtitle">Subtitle:</label>
                                <input type="text" class="form-control" id="banner_subtitle" name="banner_subtitle" value="{{ old('banner_subtitle', $contact->banner_subtitle) }}" required>
                            </div>
                            <div class="form-group">
                                <label>Banner Image</label>
                                <input type="file" class="form-control" name="ban_img" accept="image/*">
                                @if ($contact->ban_img)
                                    <img src="{{ asset($contact->ban_img) }}" class="mt-2 rounded" width="200">
                                @endif
                            </div>

                            <div class="form-group">
                                <h3>Section 1</h3>
                                <label>Section Image</label>
                                <input type="file" class="form-control" name="sec1_img" accept="image/*">
                                @if ($contact->sec1_img)
                                    <img src="{{ asset($contact->sec1_img) }}" class="mt-2 rounded" width="200">
                                @endif
                            </div>

                            <h3>Contact Info</h3>
                            <div class="form-group">
                                <label for="card_addr">Address:</label>
                                <input type="text" class="form-control" id="card_addr" name="card_addr" value="{{ old('card_addr', $contact->card_addr) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="card_phone">Phone:</label>
                                <input type="text" class="form-control" id="card_phone" name="card_phone" value="{{ old('card_phone', $contact->card_phone) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="card_email">Email:</label>
                                <input type="email" class="form-control" id="card_email" name="card_email" value="{{ old('card_email', $contact->card_email) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="card_workinghours">Working Hours:</label>
                                <input type="text" class="form-control" id="card_workinghours" name="card_workinghours" value="{{ old('card_workinghours', $contact->card_workinghours) }}" required>
                            </div>

                            <h3>Additional Info</h3>
                            <div class="form-group">
                                <label for="card2_subtitle">Subtitle:</label>
                                <input type="text" class="form-control" id="card2_subtitle" name="card2_subtitle" value="{{ old('card2_subtitle', $contact->card2_subtitle) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="card2_title">Title:</label>
                                <input type="text" class="form-control" id="card2_title" name="card2_title" value="{{ old('card2_title', $contact->card2_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="card2_desc">Description:</label>
                                <textarea class="form-control" id="card2_desc" name="card2_desc" rows="4" required>{{ old('card2_desc', $contact->card2_desc) }}</textarea>
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