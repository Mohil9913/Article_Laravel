<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article | The Cow</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../styles/article.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="../styles/style.css">
    <style>

        *{
            margin: 0;
            padding: 0;
        }

        .navbar{
            height: 20%;
            padding: 1% 4%;
            color: white;
        }

        .title{
            font-family: 'Pacifico', cursive;
            width: 30%;
        }

        .mynav{
            width: 70%;
        }

        .navl{
            margin: 0 2%;
        }
    </style>
</head>
<body>
    <nav class="navbar bg-dark" data-bs-theme="dark">
    <h1 class="title">Article</h1>
    <div class="d-flex align-items-center justify-content-end gap-2 mynav">
         <a class="nav-link active navl" aria-current="page" href="{{ route('home') }}">Home</a>
         <a class="nav-link active navl" aria-current="page" href="{{ route('publish') }}">Publish</a>
         <a class="nav-link active navl" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
         <a class="btn btn-primary navl" aria-current="page" href="{{ route('logout') }}">Logout</a>
    </div>
</nav>

    <div class="card" style="margin: 2% 4%;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between" style="width: 100%;">
                            <div class="align-self-center">
                                <h1 class="article-title">{{ $article->title }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p class="content">
                            {{ $article->article }}
                            </p>
                        </blockquote>
                    </div>
                    <div class="authordetails">
                        <p class="ms-3">Author : {{ $article->email }}</p>
                    </div>
                </div>
</body>
</html>