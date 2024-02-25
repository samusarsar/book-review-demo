@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2xl">Add Review for {{ $book->title }}</h1>

    <form method="POST" action="{{ route('books.reviews.store', $book) }}">
        @csrf
        <div>
            <label for="review">Review</label>
            <textarea name="review" id="review" required class="input mb-4"></textarea>
            @error('review')
                <p class="error mb-4">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="rating">Rating</label>
            <select name="rating" id="rating" class="input mb-4" required>
                <option value="">Select a Rating</option>
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        <button type="submit" class="btn">Add Review</button>
    </form>
@endsection