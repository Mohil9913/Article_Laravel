<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('Assets/styles/login.css/')}}">
</head>
<body>
    <center>
        <section>
            <form action="/userlogin" method="post">
                <div class="card mb-3 shadow-lg">
                    
                    @if($errors -> any())
                        <div class="error-text">
                            @foreach ($errors -> all() as $error)
                                {{$error}}
                                <br />
                            @endforeach
                        </div>
                    @endif

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

                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                        <img src="../Assets/login.jpg" class="img-fluid rounded-start" alt="IMG Error!">
                        </div>
                        <div class="col-sm-12 col-lg-6 align-self-center">
                            <div class="card-body">
                                <form method="post">
                                    <div class="cardHead">
                                        <h1>Article</h1>
                                    </div>
                                    <div class="form-floating shadow-sm">
                                        <input name="email" type="text" class="form-control inp" id="floatingInput" placeholder="Email Id">
                                        <label for="floatingInput">Email Id</label>
                                    </div>
                                    <div class="form-floating shadow-sm">
                                        <input name="password" type="password" class="form-control inp" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                    @csrf
                                    <button name="login" type="submit" class="btn btn-outline-info butt shadow-sm">Login</button>
                                    <p class="d-flex justify-content-start">Don't have an account?.. <a href={{ route('signup') }}>Signup</a> </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </center>
</body>
</html>