<!DOCTYPE html>
<html>
<head>
    <title>Authors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Authors</h1>

        <form action="{{ route('authors.index') }}" method="GET" class="row justify-content-md-center g-3 mb-1 align-items-start mb-3">
            <div class="col-sm-2 center-custom order-1 order-sm-1">
                <a href="{{ asset('') }}" class="btn btn-dark">Home</a>
            </div>
            <div class="col-sm-8 order-3 order-sm-2">
                <div class="input-group">
                    <a href="{{ route('authors.index', array_merge(request()->all(), ['sort' => 'asc'])) }}" class="btn btn-outline-primary"><i class="bi bi-sort-alpha-up"></i></a>
                    <a href="{{ route('authors.index', array_merge(request()->all(), ['sort' => 'desc'])) }}" class="btn btn-outline-primary"><i class="bi bi-sort-alpha-up-alt"></i></a>
                    <input type="text" name="search" class="form-control" placeholder="Search authors" value="{{ request('search') }}">
                    <button type="submit" class="btn btn-success">Search</button>
                    <a href="{{ route('authors.index') }}" class="btn btn-secondary">Show Full List</a>
                </div>
            </div>
            <div class="col-sm-2 center-custom end-custom-big order-2">                
                <a href="{{ route('authors.create') }}" class="btn btn-primary">Create Author</a>
            </div>    
        </form>
            

        @if($authors->isEmpty())
            <div class="alert alert-warning" role="alert">
                No authors found.
            </div>
        @else
        @foreach ($authors as $author)
            <div class="card mb-2">
                    <div class="row align-items-center center-custom">
                        <div class="col-md-4 end-custom-big py-1">
                            <img src="{{ asset('images/authordp.png') }}" class="author-dp" alt="..." width="100%">
                        </div>
                        <div class="col-md-4 start-custom">
                            <h3>{{ $author->name }}</h3>
                            <small class="text-secondary">Birth Date: {{ $author->birth_date }}</small>
                        </div>
                        <div class="col-md-4 my-2">
                            <a href="{{ route('authors.show', $author) }}" class="btn btn-info">View</a>
                            <a href="{{ route('authors.edit', $author) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('authors.destroy', $author) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
            </div>
            @endforeach
        @endif
        <br><br> 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
