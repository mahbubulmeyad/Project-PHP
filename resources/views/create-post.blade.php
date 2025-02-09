<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Funky Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(45deg, #ff9a9e, #fad0c4);
            color: #fff;
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }

        .navbar {
            background: #ff6f61;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .form-container {
            background: #ffcc5c;
            border: 2px solid #ff6f61;
            border-radius: 10px;
            margin-bottom: 10px;
            transition: transform 0.3s;
            padding: 20px;
        }

        .form-container:hover {
            transform: scale(1.02);
        }

        .form-control {
            border: 2px solid #ff6f61;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 15px;
        }

        .form-control:focus {
            box-shadow: 0 0 10px rgba(255, 111, 97, 0.4);
            border-color: #ff6f61;
        }

        .form-label {
            color: #333;
            font-weight: bold;
        }

        .btn-funky {
            background: #ff6f61;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            transition: 0.3s;
        }

        .btn-funky:hover {
            background: #ffcc5c;
            color: black;
        }

        .footer {
            background: #ff6f61;
            padding: 10px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        h1 {
            color: #333;
        }

        .alert-danger {
            background: rgba(255, 111, 97, 0.1);
            border: 2px solid #ff6f61;
            border-radius: 10px;
            color: #ff6f61;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('posts.index') }}">Funky todo</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Create New Funky Post</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="form-container">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Post Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Post Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-funky">Submit Post</button>
                    <a href="{{ route('posts.index') }}" class="btn btn-funky">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Funky todo. Keep it cool! 😎</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>