@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Home Page</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('home.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Section 1 Cards -->
                            <h3>Section 1</h3>
                            @for ($i = 1; $i <= 3; $i++)
                                <div class="form-group">
                                    <label>Card {{ $i }} Image</label>
                                    <input type="file" class="form-control" name="sec1_card{{ $i }}_img" accept="image/*">
                                    @if ($homePage["sec1_card{$i}_img"])
                                        <img src="{{ asset($homePage["sec1_card{$i}_img"]) }}" class="mt-2 rounded" width="200">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Card {{ $i }} Title:</label>
                                    <input type="text" class="form-control" name="sec1_card{{ $i }}_title" value="{{ old("sec1_card{$i}_title", $homePage["sec1_card{$i}_title"]) }}">
                                </div>
                                <div class="form-group">
                                    <label>Card {{ $i }} Description:</label>
                                    <textarea class="form-control" name="sec1_card{{ $i }}_desc" rows="3">{{ old("sec1_card{$i}_desc", $homePage["sec1_card{$i}_desc"]) }}</textarea>
                                </div>
                            @endfor

                            <!-- Section 2 -->
                            <h3>Section 2</h3>
                            <div class="form-group">
                                <label>Subtitle:</label>
                                <input type="text" class="form-control" name="sec2_subttitle" value="{{ old('sec2_subttitle', $homePage['sec2_subttitle']) }}">
                            </div>
                            <div class="form-group">
                                <label>Title:</label>
                                <input type="text" class="form-control" name="sec2_title" value="{{ old('sec2_title', $homePage['sec2_title']) }}">
                            </div>
                            <div class="form-group">
                                <label>Description:</label>
                                <textarea class="form-control" name="sec2_desc" rows="4">{{ old('sec2_desc', $homePage['sec2_desc']) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="sec2_img" accept="image/*">
                                @if ($homePage['sec2_img'])
                                    <img src="{{ asset($homePage['sec2_img']) }}" class="mt-2 rounded" width="200">
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Button Text:</label>
                                <input type="text" class="form-control" name="sec2_btn_txt" value="{{ old('sec2_btn_txt', $homePage['sec2_btn_txt']) }}">
                            </div>

                            <!-- Section 2 Cards -->
                            <h3>Section 2 Cards</h3>
                            <div class="form-group">
                                <label>Card 1 Subtitle:</label>
                                <input type="text" class="form-control" name="sec2_card1_subtitle" value="{{ old('sec2_card1_subtitle', $homePage['sec2_card1_subtitle']) }}">
                            </div>
                            <div class="form-group">
                                <label>Card 1 Title:</label>
                                <input type="text" class="form-control" name="sec2_card1_title" value="{{ old('sec2_card1_title', $homePage['sec2_card1_title']) }}">
                            </div>
                            <div class="form-group">
                                <label>Card 1 Description:</label>
                                <textarea class="form-control" name="sec2_card1_desc" rows="3">{{ old('sec2_card1_desc', $homePage['sec2_card1_desc']) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Card 2 Title:</label>
                                <input type="text" class="form-control" name="sec2_card2_title" value="{{ old('sec2_card2_title', $homePage['sec2_card2_title']) }}">
                            </div>
                            <div class="form-group">
                                <label>Card 2 Secondary Title:</label>
                                <input type="text" class="form-control" name="sec2_card2_title2" value="{{ old('sec2_card2_title2', $homePage['sec2_card2_title2']) }}">
                            </div>
                               <!-- Section 3 -->
                               <div class="form-group">
                                <h3>Section 3</h3>
                                <label for="sec3_subttitle">Subtitle:</label>
                                <input type="text" class="form-control" id="sec3_subttitle" name="sec3_subttitle" value="{{ old('sec3_subttitle', $homePage->sec3_subttitle) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec3_title">Title:</label>
                                <input type="text" class="form-control" id="sec3_title" name="sec3_title" value="{{ old('sec3_title', $homePage->sec3_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec3_desc">Description:</label>
                                <textarea class="form-control" id="sec3_desc" name="sec3_desc" rows="4" required>{{ old('sec3_desc', $homePage->sec3_desc) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="sec3_btn_txt">Button Text:</label>
                                <input type="text" class="form-control" id="sec3_btn_txt" name="sec3_btn_txt" value="{{ old('sec3_btn_txt', $homePage->sec3_btn_txt) }}" required>
                            </div>
                            <div class="form-group">
                                <label>Section 3 Image</label>
                                <input type="file" class="form-control" name="sec3_img" accept="image/*">
                                @if ($homePage->sec3_img)
                                    <img src="{{ asset($homePage->sec3_img) }}" class="mt-2 rounded" width="200">
                                @endif
                            </div>

                            <!-- Section 3 Cards -->
                            <div class="form-group">
                                <h4>Card 1</h4>
                                <label for="sec3_card1_title">Title:</label>
                                <input type="text" class="form-control" id="sec3_card1_title" name="sec3_card1_title" value="{{ old('sec3_card1_title', $homePage->sec3_card1_title) }}" required>
                                <label for="sec3_card1_desc">Description:</label>
                                <textarea class="form-control" id="sec3_card1_desc" name="sec3_card1_desc" rows="2" required>{{ old('sec3_card1_desc', $homePage->sec3_card1_desc) }}</textarea>
                            </div>
                            <div class="form-group">
                                <h4>Card 2</h4>
                                <label for="sec3_card2_title">Title:</label>
                                <input type="text" class="form-control" id="sec3_card2_title" name="sec3_card2_title" value="{{ old('sec3_card2_title', $homePage->sec3_card2_title) }}" required>
                                <label for="sec3_card2_desc">Description:</label>
                                <textarea class="form-control" id="sec3_card2_desc" name="sec3_card2_desc" rows="2" required>{{ old('sec3_card2_desc', $homePage->sec3_card2_desc) }}</textarea>
                            </div>
                            <div class="form-group">
                                <h4>Card 3</h4>
                                <label for="sec3_card3_title">Title:</label>
                                <input type="text" class="form-control" id="sec3_card3_title" name="sec3_card3_title" value="{{ old('sec3_card3_title', $homePage->sec3_card3_title) }}" required>
                                <label for="sec3_card3_desc">Description:</label>
                                <textarea class="form-control" id="sec3_card3_desc" name="sec3_card3_desc" rows="2" required>{{ old('sec3_card3_desc', $homePage->sec3_card3_desc) }}</textarea>
                            </div>

                               <!-- Section 4 -->
                               <h3>Section 4</h3>
                            <div class="form-group">
                                <label for="sec4_subttitle">Subtitle:</label>
                                <input type="text" class="form-control" id="sec4_subttitle" name="sec4_subttitle" value="{{ old('sec4_subttitle', $homePage->sec4_subttitle) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec4_title">Title:</label>
                                <input type="text" class="form-control" id="sec4_title" name="sec4_title" value="{{ old('sec4_title', $homePage->sec4_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec4_desc">Description:</label>
                                <textarea class="form-control" id="sec4_desc" name="sec4_desc" rows="4" required>{{ old('sec4_desc', $homePage->sec4_desc) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="sec4_img" accept="image/*">
                                @if ($homePage->sec4_img)
                                    <img src="{{ asset($homePage->sec4_img) }}" class="mt-2 rounded" width="200">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="sec4_btn_txt">Button Text:</label>
                                <input type="text" class="form-control" id="sec4_btn_txt" name="sec4_btn_txt" value="{{ old('sec4_btn_txt', $homePage->sec4_btn_txt) }}" required>
                            </div>

                            <!-- Section 5 -->
                            <h3>Section 5</h3>
                            <div class="form-group">
                                <label for="sec5_subttitle">Subtitle:</label>
                                <input type="text" class="form-control" id="sec5_subttitle" name="sec5_subttitle" value="{{ old('sec5_subttitle', $homePage->sec5_subttitle) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec5_title">Title:</label>
                                <input type="text" class="form-control" id="sec5_title" name="sec5_title" value="{{ old('sec5_title', $homePage->sec5_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sec5_desc">Description:</label>
                                <textarea class="form-control" id="sec5_desc" name="sec5_desc" rows="4" required>{{ old('sec5_desc', $homePage->sec5_desc) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="sec5_btn_txt">button Text:</label>
                                <input class="form-control" id="sec5_btn_txt" name="sec5_btn_txt" required value="{{ old('sec5_btn_txt', $homePage->sec5_btn_txt) }}">
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" class="form-control" name="sec5_img" accept="image/*">
                                @if ($homePage->sec5_img)
                                    <img src="{{ asset($homePage->sec5_img) }}" class="mt-2 rounded" width="200">
                                @endif
                                <input type="file" class="form-control mt-2" name="sec5_img2" accept="image/*">
                                @if ($homePage->sec5_img2)
                                    <img src="{{ asset($homePage->sec5_img2) }}" class="mt-2 rounded" width="200">
                                @endif
                            </div>

                            <!-- Counters -->
                            <h3>Counters</h3>
                            @for ($i = 1; $i <= 4; $i++)
                                <div class="form-group">
                                    <label for="counter{{ $i }}_num">Counter {{ $i }} Number:</label>
                                    <input type="number" class="form-control" id="counter{{ $i }}_num" name="counter{{ $i }}_num" value="{{ old('counter'.$i.'_num', $homePage->{'counter'.$i.'_num'}) }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="counter{{ $i }}_text">Counter {{ $i }} Text:</label>
                                    <input type="text" class="form-control" id="counter{{ $i }}_text" name="counter{{ $i }}_text" value="{{ old('counter'.$i.'_text', $homePage->{'counter'.$i.'_text'}) }}" required>
                                </div>
                            @endfor

                            <!-- Section 6 -->
                            <h3>Section 6</h3>
                            <div class="form-group">
                                <label for="sec6_title">Title:</label>
                                <input type="text" class="form-control" id="sec6_title" name="sec6_title" value="{{ old('sec6_title', $homePage->sec6_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="sec6_img" accept="image/*">
                                @if ($homePage->sec6_img)
                                    <img src="{{ asset($homePage->sec6_img) }}" class="mt-2 rounded" width="200">
                                @endif
                            </div>

                            <!-- FAQ Section -->
                            <h3>FAQ Section</h3>
                            <div class="form-group">
                                <label for="faq_subttitle">Subtitle</label>
                                <input type="text" class="form-control" id="faq_subttitle" name="faq_subttitle" value="{{ old('faq_subttitle', $homePage->faq_subttitle) }}" required>
                            </div>                            
                            <div class="form-group">
                                <label for="faq_title">Title:</label>
                                <input type="text" class="form-control" id="faq_title" name="faq_title" value="{{ old('faq_title', $homePage->faq_title) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="faq_desc">Description:</label>
                                <textarea class="form-control" id="faq_desc" name="faq_desc" rows="4" required>{{ old('faq_desc', $homePage->faq_desc) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="faq_btn_txt">Button Text</label>
                                <input type="text" class="form-control" id="faq_btn_txt" name="faq_btn_txt" value="{{ old('faq_btn_txt', $homePage->faq_btn_txt) }}" required>
                            </div>                            
                            <div class="form-group">
                                <label>FAQ Image</label>
                                <input type="file" class="form-control" name="faq_img" accept="image/*">
                                @if ($homePage->faq_img)
                                    <img src="{{ asset($homePage->faq_img) }}" class="mt-2 rounded" width="200">
                                @endif
                            </div>

                            <!-- Delivery Section -->
                            <h3>Delivery Section</h3>
                            <div class="form-group">
                                <label for="delivery_subttitle">Subtitle:</label>
                                <input type="text" class="form-control" id="delivery_subttitle" name="delivery_subttitle" value="{{ old('delivery_subttitle', $homePage->delivery_subttitle) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="delivery_title">Title:</label>
                                <input type="text" class="form-control" id="delivery_title" name="delivery_title" value="{{ old('delivery_title', $homePage->delivery_title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="delivery_desc">Description:</label>
                                <textarea class="form-control" id="delivery_desc" name="delivery_desc" rows="4" required>{{ old('delivery_desc', $homePage->delivery_desc) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Delivery Image</label>
                                <input type="file" class="form-control" name="delivery_img" accept="image/*">
                                @if ($homePage->delivery_img)
                                    <img src="{{ asset($homePage->delivery_img) }}" class="mt-2 rounded" width="200">
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