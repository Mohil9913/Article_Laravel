<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <style>
        body{
            background-color: #62CDFF;
        }

        .card{
            border: 0;
            margin: 6% 20%;
        }

        .butt{
            margin: 0.5%;
        }
    </style>
</head>
<body>
    <center>
        <section>
            <div class="card shadow-lg">
                <img src="./Assets/welcome.jpg" class="card-img-top" alt="IMG Error!">
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="/login" class="btn btn-outline-info butt shadow-sm">Login</a>
                        <a href="/signup" class="btn btn-outline-info butt shadow-sm">Signup</a>
                    </div>
                </div>
              </div>
        </section>
    </center>
</body>
</html>