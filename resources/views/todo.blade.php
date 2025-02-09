<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funky todo Posts</title>
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

        .list-group-item {
            background: #ffcc5c;
            border: 2px solid #ff6f61;
            border-radius: 10px;
            margin-bottom: 10px;
            transition: transform 0.3s;
        }

        .list-group-item:hover {
            transform: scale(1.05);
            background: #ff6f61;
            color: white;
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
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Funky todo</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">🔥 Latest Funky todo Posts 🔥</h1>
        <div class="list-group">
            @if($posts->count() > 0)
                @foreach($posts as $post)
                    <div class="list-group-item text-dark">
                        <h5 class="mb-1">
                            <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none text-dark">
                                {{ $post->title }}
                            </a>
                        </h5>
                        <p class="mb-1">{{ $post->description }}</p>
                    </div>
                @endforeach
            @else
                <div class="list-group-item text-center text-dark">
                    <p class="mb-1"><strong>No funky todo posts available.</strong></p>
                </div>
            @endif
        </div>

        <div class="text-center mt-3">
            <a href="{{ route('posts.create') }}" class="btn btn-funky">Create New Funky Post</a>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Funky todo. Keep it cool! 😎</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>