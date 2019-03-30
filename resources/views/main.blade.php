<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Ganga Service</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/')}}/css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/css/mainpage.css" >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
        <div class="container-fluid">
            <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Brand -->
            <a class="navbar-brand" href="{{url('/')}}/" ><img src="{{url('/')}}/images/fullLogo.png" class="rounded cusView" alt="logo" /></a>
            
            <!-- Links -->
            <div class="collapse navbar-collapse" id="nav-content">   
            <ul class="navbar-nav justified-content-end">
                <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="Myservice" data-toggle="modal" data-target="#service" >My Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                <a class="nav-link"  href="{{url('/')}}/signup" >Become A professional</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="login1" data-toggle="modal" data-target="#myModal" >Login/SignUp</a>
                </li>
            </ul>
            </div>
            </nav>
        </div>        
    </header>

    @yield('home')
    @yield('profile')
    @yield('signup')
    @yield('hire')
    @yield('signupForm')
    
    <br>
    <footer id="footer" class="bg-one">
        <div class="top-footer">
            <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                <h3>about</h3>
                <p>Integer posuere erat a ante venenati dapibus posuere velit aliquet. Fusce dapibus, tellus cursus commodo, tortor mauris sed posuere.</p>
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3">
                <ul>
                    <li><h3>Our Services</h3></li>
                    <li><a href="#">Ganga Services</a></li>
                    <li><a href="#">Ganga Cart</a></li>
                    <li><a href="#">SSGF</a></li>
                </ul>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-sm-3 col-md-3 col-lg-3">
                <ul>
                    <li><h3>Quick Links</h3></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">FAQ’s</a></li>
                    <li><a href="#">Badges</a></li>
                </ul>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-sm-3 col-md-3 col-lg-3">
                <ul>
                    <li><h3>Connect with us Socially</h3></li>
                    <li><a href="https://www.facebook.com/GangaServices-569196783564068/?modal=admin_todo_tour">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Youtube</a></li>
                    <li><a href="#">Pinterest</a></li>
                </ul>
                </div>
                <!-- End of .col-sm-3 -->

            </div>
            </div> <!-- end container -->
        </div>
        <div class="footer-bottom">
            <h5>Copyright 2019. All rights reserved.</h5>
            <h6>Design and Developed by <a href="">Beeru</a></h6>
        </div>
    </footer>
  </body>
</html>