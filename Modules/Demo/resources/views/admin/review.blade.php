@extends('adminlte::page')

@section('title', 'Reviews Management')

@section('content_header')
    <h1>Reviews Management</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Product</th>
                        <th>Content</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reviews as $review)
                        <tr>
                            <td>{{ $review->id }}</td>
                            <td>{{ $review->user->name }}</td>
                            <td>{{ $review->product_name }}</td>
                            <td>{{ $review->content }}</td>
                            <td>{{ $review->rating }}/5</td>
                            <td>
                                <form action="{{ route('admin.reviews.update', $review) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="status_{{ $review->id }}" 
                                               name="is_approved" {{ $review->is_approved ? 'checked' : '' }}
                                               onchange="this.form.submit()">
                                        <label class="custom-control-label" for="status_{{ $review->id }}">
                                            {{ $review->is_approved ? 'Approved' : 'Pending' }}
                                        </label>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('admin.reviews.destroy', $review) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Are you sure you want to delete this review?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                {{ $reviews->links() }}
            </div>
        </div>
    </div>
@stop