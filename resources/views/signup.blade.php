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

    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('Assets/styles/signup.css')}}">

</head>
<body>
    <center>
        <section>
            <div class="card mb-3 shadow-lg cardPage">
            <div class="row">
                <div class="col-12">
                <img src="../Assets/signup.jpg" class="img-fluid rounded-start cardImg" alt="IMG Error!">
                </div>
                <div class="col-12 align-self-center">
                    <div class="card-body">
                        <form method="post" action="{{ route('signup.post') }}">
                            @csrf 
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
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-floating shadow-sm" style="margin-right: 2%;">
                                        <input name="fname" type="text" class="form-control inp" id="floatingPassword" placeholder="First Name" >
                                        <label for="floatingPassword">First Name</label>
                                       
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating shadow-sm" style="margin-left: 2%;">
                                        <input name="lname" type="text" class="form-control inp" id="floatingPassword" placeholder="Last Name" >
                                        <label for="floatingPassword">Last Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating shado w-sm">
                                <input name="email" type="text" class="form-control inp" id="floatingInput" placeholder="Email Id" >
                                <label for="floatingInput">Email Id</label>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-floating shadow-sm" style="margin-right: 2%;">
                                        <input name="password" type="password" class="form-control inp" id="floatingPassword" placeholder="Password" >
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating shadow-sm" style="margin-left: 2%;">
                                        <input name="password_confirmation" type="password" class="form-control inp" id="floatingPassword" placeholder="Re-Password" >
                                        <label for="floatingPassword">Re-Password</label>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row inp" style="margin-top: 2%;">
                                <div class="col-8">
                                    <div class="form-floating" style="margin-right: 2%;">
                                            <div class="row">
                                                <div class="card col-5 shadow-sm cardRadio">
                                                    <div class="form-check">
                                                        <input value="male" class="form-check-input" type="radio" name="gender" id="gender" checked>
                                                        <img class="cardGen" src="../Assets/male.jpg" alt="male.jpg">
                                                    </div>
                                                </div>
                                                <div class="card col-5 shadow-sm cardRadio">
                                                    <div class="form-check">
                                                        <input value="female" class="form-check-input" type="radio" name="gender" id="gender">
                                                        <img class="cardGen" src="../Assets/female.jpg" alt="female.jpg">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div style="text-align: left; padding: 10%;">
                                        <h3 style="text-align: center;">Date of Birth</h3>
                                        <div class="form-floating" style="margin-left: 2%;">
                                            <input name="dob" type="date" style="padding:2% 18%" class="dob" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            @csrf
                            <button name="signup" type="submit" class="btn btn-outline-info butt shadow-sm">Signup</button>
                            <p class="d-flex justify-content-center">Already have an account?.. <a href="{{ route('login') }}">Login</a> </p>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </center>
</body>
</html>
