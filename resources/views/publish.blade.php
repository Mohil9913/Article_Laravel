<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publish | Article</title>
    <!-- google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Itim&family=Pacifico&family=Sassy+Frass&display=swap" rel="stylesheet">
    <!-- 
        font-family: 'Pacifico', cursive;
    -->

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="../styles/style.css">

    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <style>

        *{
            margin: 0;
            padding: 0;
        }

        textarea {
          
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

        .mar{
          margin: 20px 0;
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
  @if(isset($article))
    <form action="{{route('publish.save', $article -> id)}}" method="post" class="container" style="margin-top: 4%;">

      <div class="form-floating shadow-sm">
        <input name="title" type="text" class="form-control inp mar" id="tit" placeholder="Title" value="{{$article -> title}}">
        <label for="tit">Article Title</label>
      </div>

      <div class="form-floating shadow-sm">
        <textarea name="article" class="form-control inp mar" id="po" placeholder="Article"  style="height: 250px;">{{$article -> article}}</textarea>
        <label for="po">Article Body</label>
      </div>

      @csrf
      <input type="submit" value="Publish" class="btn btn-primary mar">
    </form>
  @else
    <form action="{{route('publish.post')}}" method="post" class="container" style="margin-top: 4%;">

      <div class="form-floating shadow-sm">
        <input name="title" type="text" class="form-control inp mar" id="tit" placeholder="Title">
        <label for="tit">Article Title</label>
      </div>

      <div class="form-floating shadow-sm">
        <textarea name="article" class="form-control inp mar" id="po" placeholder="Article" style="height: 250px;"></textarea>
        <label for="po">Article Body</label>
      </div>
      @csrf
      <input type="submit" value="Publish" class="btn btn-primary mar">
    </form>
  @endif
</body>
</html>