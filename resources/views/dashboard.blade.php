<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Articles | Article</title>
    <!-- google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Itim&family=Pacifico&family=Sassy+Frass&display=swap" rel="stylesheet">
    <!-- 
        font-family: 'Pacifico', cursive;
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

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

        .error-text {
            color: rgb(255, 255, 255);
            background: rgba(255, 68, 68, 0.76);
            font-weight: bold;
            text-align: center;
            padding: 0.2rem 0.2rem;
            padding: 1rem;
            border-radius: 5px;
            width: 100%;
        }

        .success-text {
            color: rgb(0, 0, 0);
            background: rgba(137, 255, 68, 0.76);
            font-weight: bold;
            text-align: center;
            padding: 0.2rem 0.2rem;
            padding: 1rem;
            border-radius: 5px;
            width: 100%;
        }
    </style>

    <!-- custom css -->
    <link rel="stylesheet" href="../styles/style.css">
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
        @if(session() -> has('error'))
        <div class="error-text">
            {{session('error')}}
        </div>
        @endif

        @if(session() -> has('success'))
        <div class="success-text">
            {{session('success')}}
        </div>
        @endif
        @if($article)
            @foreach ($article as $item)
                <div class="shadow p-3 mb-5 card" style="margin: 2% 3%;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between" style="width: 100%;">
                            <div class="align-self-center">
                                <h4>{{$item->title}}</h4>
                            </div>
                            <div class="align-self-end">
                                <a  class="btn btn-success" href="{{route('view', $item->id)}}">View</a>
                                <a  class="btn btn-primary" href="{{route('publish', $item->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('delete', $item->id)}}">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p>
                            {{(strlen($item -> article) > 128 ? $articleContent = substr($item -> article, 0, 128).'...' : $articleContent = $item -> article);}}
                        </p>
                        <footer class="blockquote-footer">
                            {{$item->created_at->diffForHumans()}}
                        </footer>
                        </blockquote>
                    </div>
                </div>
            @endforeach
        @else
            <div class="shadow p-3 mb-5 card" style="margin: 2% 3%;">
                <div class="card-header">
                    <div class="d-flex justify-content-between" style="width: 100%;">
                        <div class="align-self-center">
                            <h4>You Haven't Published Anything Yet!</h4>
                        </div>
                    </div>
                </div>
            </div>
        @endif
</body>
</html>