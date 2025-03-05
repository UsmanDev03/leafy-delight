@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Contact Responses</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>All Contact Messages</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($responses as $key => $response)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $response->name }}</td>
                                    <td>{{ $response->email }}</td>
                                    <td>{{ Str::limit($response->message, 50) }}</td>
                                    <td>{{ $response->created_at->format('d M, Y') }}</td>
                                    <td>
                                        <a href="{{ route('admin.contact-detail', $response->id) }}" class="btn btn-primary btn-sm">View</a>
                                        <form action="{{ route('contact.destroy', $response->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
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
