<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - {{ $message ?? 'Not Found' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(45deg, #2c3e50, #3498db);
            color: #fff;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .navbar {
            background: #34495e;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .card {
            background: rgba(52, 73, 94, 0.9);
            border: 2px solid #95a5a6;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            transform: translateY(0);
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .card-title {
            color: #e74c3c;
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .card-text {
            font-size: 1.5rem;
            color: #bdc3c7;
            margin-bottom: 2rem;
        }

        .btn-sad {
            background: #3498db;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            transition: 0.3s;
            font-size: 1.2rem;
            color: white;
        }

        .btn-sad:hover {
            background: #2980b9;
            transform: scale(1.05);
            color: white;
        }

        .footer {
            background: #34495e;
            padding: 10px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
            color: #bdc3c7;
        }

        .sad-emoji {
            font-size: 4rem;
            margin-bottom: 1rem;
            animation: shake 3s ease-in-out infinite;
        }

        @keyframes shake {
            0% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(-5deg);
            }

            75% {
                transform: rotate(5deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('posts.index') }}">Funky todo</a>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <div class="sad-emoji">😢</div>
                <h1 class="card-title">Oops!</h1>
                <p class="card-text">{{ $message ?? 'Not Found' }}</p>
                <div class="mt-4">
                    <a href="{{ route('posts.index') }}" class="btn btn-sad">
                        Take Me Home 🏠
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>Don't worry, these things happen! Let's go back and try again 💫</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>