<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Books</h1>

        <form method="GET" action="{{ route('books.index') }}" class="row justify-content-md-center g-3 mb-1 align-items-start mb-3">
            <div class="col-sm-2 center-custom order-1 order-sm-1">
                <a href="{{ asset('') }}" class="btn btn-dark">Home</a>
            </div>
            <div class="col-sm-8 order-3 order-sm-2">
                <div class="input-group">
                    <a href="{{ route('books.index', array_merge(request()->all(), ['sort' => 'asc'])) }}" class="btn btn-outline-primary"><i class="bi bi-sort-alpha-up"></i></a>
                    <a href="{{ route('books.index', array_merge(request()->all(), ['sort' => 'desc'])) }}" class="btn btn-outline-primary"><i class="bi bi-sort-alpha-up-alt"></i></a>
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search books...">
                    <button type="submit" class="btn btn-success">Search</button>
                    <a href="{{ route('books.index') }}" class="btn btn-secondary">Show Full List</a>
                </div>
            </div>
            <div class="col-sm-2 center-custom end-custom-big order-2">
                <a href="{{ route('books.create') }}" class="btn btn-primary">Create New Book</a>
            </div>
        </form>

        @if($books->isEmpty())
            <div class="alert alert-warning" role="alert">
                No books found.
            </div>
        @else
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Books</th>
                    <th scope="col">Full name</th>
                    <th scope="col">
                        <div class="text-center">Action</div>
                    </th>
                </tr>
            </thead>
            <tbody>   
                @foreach ($books as $book)
                <tr>
                  <th scope="row">•</th>
                  <td>{{ $book->title }}</td>
                  <td>{{ $book->author->name }}</td>
                  <td class="text-center">
                    <a href="{{ route('books.show', $book) }}" class="btn btn-info btn-sm margin-y">View</a>
                    <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm margin-y">Edit</a>
                    <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm margin-y">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table><br><br>
    </div>
</body>
</html>