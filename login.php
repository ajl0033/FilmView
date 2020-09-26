<?php
require 'includes/header.php'
?>
<main>
<link rel="stylesheet" href="css/login.css">

    <div class="bg-cover">
        <div class="row">
            <div id="slides" class="carousel slide col-md-4 offset-md-4" data-ride="carousel" style="margin-top: 10px;">
                <ol class="carousel-indicators">
                  <li data-target="#slides" data-slide-to="0" class="active"></li>
                  <li data-target="#slides" data-slide-to="1"></li>
                  <li data-target="#slides" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block mx-auto" src="./images/Slide1.jpg" alt="First slide" style="width: 100%;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block mx-auto" src="./images/Slide2.jpg" alt="Second slide" style="width: 100%;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block mx-auto" src="./images/Slide3.jpg" alt="Third slide" style="width: 100%;">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>

        <div class="h-0 center-me">
            <div class="my-auto">
                <form class="form-signin" action="includes/login-helper.php" method="post" style="background: rgb(248, 239, 239); margin-top: -20px; border: 3px solid rgb(0, 0, 0); box-shadow: 0px 0px 20px 20px #00000086;">
                    <img src="images/icon.JPG" style="height: 59px; width: 105px; border: 2px solid black;"/>
                    <h1 class="h3 mb-3 font-weight-normal" style="padding: 10px; text-align: left;">Please sign in</h1>
                    <label for="inputEmail" class="sr-only">Username or Email address</label>
                    <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="Username/ Email" required
                        autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3" style="margin-top: 6px; text-align: left;">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" name="login-submit" type="submit" style="margin-top: -20px; margin-bottom: -30px;">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                </form>
            </div>
        </div>
    </div>
</main>