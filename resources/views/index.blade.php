<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="container">
            <h1 class="text-center mt-title">Welcome to the Library Manager</h1>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="{{ route('authors.index') }}" class="hover-opacity"><img src="{{ asset('images/author.jpg') }}" alt="Author" class="img-fluid mb-2 img-hov"></a>
                            <h2 class="card-title">Authors</h2>
                            <p class="card-text">Manage the list of authors.</p>
                            <a href="{{ route('authors.index') }}" class="btn btn-primary">View Authors</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="{{ route('books.index') }}" class="hover-opacity"><img src="{{ asset('images/book.jpg') }}" alt="book" class="img-fluid mb-2"></a>
                            <h2 class="card-title">Books</h2>
                            <p class="card-text">Manage the list of books.</p>
                            <a href="{{ route('books.index') }}" class="btn btn-primary">View Books</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="fs-6 text-center mt-5 text-secondary">© Ceasar Ian Fernandez</p>
    </div>
</body>
</html>