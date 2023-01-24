<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTER | GEZZEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
   
    <section class="register d-flex">

        <div class="kiri w-50 h-100">
        <img src="Frame 1.png" alt="puzzle">
        </div>

        <div class="kanan w-50 h-100">

            <div class="back">
                <a href="login.html"><img src="back.png" alt="">Back</a>
            </div>

            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                   
                    <div class="header">
                        <center><h1>REGISTER</h1>
                        <p>For the purpose of industry regulation, your details are required.</p></center>
                    </div>
                    <div class="regis-form">
                        <form action="code.php" method="post">
                         <label for="username" class="form-label">Username</label>
                         <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
        
                         <label for="email" class="form-label">Email address</label>
                         <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
        
                         <label for="pasword" class="form-label">Create password</label>
                         <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
        
                         <input type="checkbox" id="agree" name="agree" value="agree">
                         <label for="vehicle1"> I agree to terms & conditions</label><br>
        
                         <button typre="submit" name="regis" class="regis-btn">Register Account</button>

                         <center><h3>Or</h3></center>

                         <button class="regis-google">
                            <img src="icon.png" alt="google">
                            Register with Google</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>  