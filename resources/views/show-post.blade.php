<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
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

        .card {
            background: #ffcc5c;
            border: 2px solid #ff6f61;
            border-radius: 10px;
            margin-bottom: 10px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .btn-funky {
            background: #ff6f61;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            transition: 0.3s;
            color: white;
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
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('posts.index') }}">Funky todo</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-dark">{{ $post->title }}</h1>
                <p class="card-text text-dark">{{ $post->description }}</p>
                <div class="mt-3">
                    <small class="text-dark">Created: {{ $post->created_at->format('F d, Y') }}</small>
                </div>
            </div>
        </div>

        <div class="mt-3 mb-5">
            <a href="{{ route('posts.index') }}" class="btn btn-funky">Back to Posts</a>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Funky todo. Keep it cool! 😎</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>