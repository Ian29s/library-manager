<!DOCTYPE html>
<html>
<head>
    <title>Create Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <a href="{{ asset('books') }}">Return to Book List</a>
        <div class="px-5 py-5 shadow">
            <h1 class="text-center">Register Book</h1>
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                </div>
                <div class="mb-3">
                    <label for="author_id" class="form-label">Author:</label>
                    <select id="author_id" name="author_id" class="form-select">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="published_date" class="form-label">Published Date:</label><br>
                    <input type="date" id="published_date" name="published_date" value="{{ old('published_date') }}" class="form-control" required>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>