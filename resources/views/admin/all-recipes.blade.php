@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>All Recipes</h1>
        </div>

        <div class="section-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Recipe List</h4>
                    <a href="{{ route('recipes.add') }}" class="btn btn-primary float-right">Add New Recipe</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recipes as $recipe)
                                    <tr>
                                        <td>{{ $recipe->id }}</td>
                                        <td>{{ $recipe->sec1_title }}</td>
                                        <td>{{ $recipe->sec1_date }}</td>
                                        <td>
                                            @if($recipe->sec1_img)
                                                <img src="{{ asset($recipe->sec1_img) }}" alt="Recipe Image" width="80">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('recipes.modify', $recipe->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                            <form action="{{ route('recipes.remove', $recipe->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
