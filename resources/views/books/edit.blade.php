<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <a href="{{ asset('books') }}">Return to Author List</a>
        <div class="px-5 py-5 shadow">
            <h1 class="text-center">Edit Book</h1>
            <form action="{{ route('books.update', $book) }}" method="POST" style="min-width: 250px">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" id="title" name="title" value="{{ $book->title }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="author_id" class="form-label">Author:</label>
                    <select id="author_id" name="author_id" class="form-select" required>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" @if ($book->author_id == $author->id) selected @endif>{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="published_date" class="form-label">Published Date:</label>
                    <input type="date" id="published_date" name="published_date" value="{{ $book->published_date }}" class="form-control">
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
