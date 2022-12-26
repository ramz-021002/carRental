<?php
 
   
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Login.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <title>Car Rental</title>
</head>

<body>
    <!-- Header -->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top nav-menu">
            <a href="Index.html"><i class="fas fa-car-side fa-3x"></i></a>
            <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#navbar">
                <div class="bg-light bar1"></div>
                <div class="bg-light bar2"></div>
                <div class="bg-light bar3"></div>
            </button>
            <div class="collapse navbar-collapse justify-content-end text-uppercase font-weight-bold" id="navbar">
                <ul class="navbar-nav">
                <li class="nav-item"><a href="Index.html" class="nav-link m-2 menu">Home</a></li>
                <li class="nav-item"><a href="Services.html" class="nav-link m-2 menu">Services</a></li>
                <li class="nav-item"><a href="About.html" class="nav-link m-2 menu">About</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link m-2 menu">Contact Us</a></li>
                <li class="nav-item"><a href="Login.php" class="nav-link m-2 menu">Login</a></li>
                </ul>
            </div>
        </nav>
        <!-- End od navbar -->
        <!-- login -->
        <section class="text-center" id="loginpage">
            <div class="container login-container">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <h2>Rent4U</h2>
                        <p>Hey there, to book a ride Sign Up or login</p>
                    </div>

                    <div class="col-md-6 col-xs-3 login-form-1">
                        <h3>Sign Up</h3>
                        <form action="input.php" method="post/get">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Full Name *" value="" name="name" required="required"/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" value="" name="email" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Your Password *" value="" name="password" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="Sign Up" name="signup" onclick="myFunction()" />
                            </div>
                        </form>

                    </div>
                    <script>
                            function myFunction() 
                            {
                              alert("You have successfully registered");
                            }
                    </script>

                    <div class="col-md-6 col-xs-3 login-form-2">
                        <h3>Login</h3>
                        <form action="index2.php" method="GET/POST">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" value="" name="email"  required="required" />
                            </div>
                            <div class="form-group">
                             <input type="password" class="form-control" placeholder="Your Password *" value="" name="password" required="required" />
                            </div>
                            <div class="form-group">
                               <input type="submit"  class="btnSubmit"  name="submit" id="submit" />
                            </div>

                        </form>
                    </div>
                    <?php  
if(isset($_POST["submit"]))
{  
  
if(!empty($_POST['email']) && !empty($_POST['password'])) 
{  
    $email=$_POST['email'];  
    $password=$_POST['password'];  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('car_rental') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM logindetails WHERE username='".$email."' AND password='".$password."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbemail=$row['email'];  
    $dbpassword=$row['password'];  
    }  
  
    if($email == $dbemail && $password == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$email;  
  
    /* Redirect browser */  
    header("Location: index.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
                </div>
            </div>
        </section>

        <!-- Footer -->
        <div class="footer">
            <div class="container1">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Download App for Android and ios mobile phone.</p>
                        <div class="app-logo">
                            <img src="images/play-store.png">
                            <img src="images/app-store.png">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <a href="Index.html"><i class="fas fa-car-side fa-3x"></i></a>
                        <p>Our Purpose Is To Sustainably make the Pleasure and
                            Benifits of sports Accessible to the many.</p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="">Coupons</a></li>
                            <li><a href="">Blogs Post</a></li>
                            <li><a href="">Return policy</a></li>
                            <li><a href="">Join Affiliates</a></li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Social Media</h3>
                        <ul>
                            <li><a href="">FaceBook</a></li>
                            <li><a href="">Instagram</a></li>
                            <li><a href="">LinkedIn</a></li>
                            <li><a href="">Twitter</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">CopyRight 2021 - Group 19</p>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>