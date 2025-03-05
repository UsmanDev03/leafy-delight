@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Contact Response Detail</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Message from {{ $response->name }}</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Name:</th>
                            <td>{{ $response->name }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $response->email }}</td>
                        </tr>
                        <tr>
                            <th>Message:</th>
                            <td>{{ $response->massage }}</td>
                        </tr>
                        <tr>
                            <th>Received On:</th>
                            <td>{{ $response->created_at->format('d M, Y h:i A') }}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('contact.index') }}" class="btn btn-secondary">Back</a>
                    <form action="{{ route('contact.destroy', $response->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
