<!DOCTYPE html>
<html>
<head>
    <title>Show Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <a href="{{ asset('books') }}">Return to Author List</a>
        <div class="px-5 py-5 shadow">
            <h1 class="text-center">Book Details</h1><hr>
            <p><strong>Title:</strong> {{ $book->title }}</p>
            <p><strong>Author:</strong> {{ $book->author->name }}</p>
            <p><strong>Published Date:</strong> {{ $book->published_date }}</p>
            <div class="text-end">
                <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
