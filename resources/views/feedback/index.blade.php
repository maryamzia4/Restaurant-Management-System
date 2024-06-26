@extends('layouts.app')

@section('content')
    <h1>Feedback Form</h1>
    <div class="text-right">
        <a href="{{ url('/') }}" class="btn btn-primary">Go Back to Main Page</a>
    </div>

    <form id="feedbackForm" method="POST" action="/feedback">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="suggestion_feedback">Suggestion/Feedback:</label>
            <textarea class="form-control" id="suggestion_feedback" name="suggestion_feedback" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="rating">Rating:</label>
            <select class="form-control" id="rating" name="rating" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>
    <h2>Feedback List</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Suggestion/Feedback</th>
                <th>Rating</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->name }}</td>
                    <td>{{ $feedback->email }}</td>
                    <td>{{ $feedback->suggestion_feedback }}</td>
                    <td>{{ $feedback->rating }}</td>
                    <td>
                        <a href="/feedback/{{ $feedback->id }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/feedback/{{ $feedback->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        // Add any additional JavaScript for feedback page here
    });
</script>
@endpush
