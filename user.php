<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">

    
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-light bg-Success fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="password.png" alt=""><span class="about">Login</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">About Us</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index1.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index1.html#g3">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index1.html#choose">Why Choose Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index1.html#cont">Patient</a>
                        </li>


                    </ul>

                </div>
            </div>
        </div>
    </nav>
    <!--Login-->
    <div class="container">
        <div class="row">
            <div class="col-sm-7" id="ac">
                <div class="right">
                    <div class="container">
                        <h2>New Here?</h2>
                        <p>Sign up here and find your respective doctor</p>
                        <img src="account.png" alt="" id="account"><br>
                        <a href="Sign-Up.html"><button class="sub">Sign-Up</button></a><br>
                    </div>
                </div>


            </div>
            <div class="col-sm-5">
                <form class="log" method="POST" action="login.php">
                    <h2 class="text-center">Login</h2><br>
                    <label for="Username">Username</label><br><br>
                    <input type="text" placeholder="Username" id="Username" name="User_name" required><br><br>
                    <label for="Password">Password</label><br><br>
                    <input type="password" placeholder="Password" id="Password" name="Pass_word" required><br><br>
                    <button class="but">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>