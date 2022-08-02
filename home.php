<!-- registration.php form -->
<?php
require_once "config.php";

if(!empty($_SESSION['id'])){
    header("Location: index.php");
}

if(isset($_POST['submit'])){
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $confirm = filter_var($_POST['rptpassword'], FILTER_SANITIZE_STRING);

    $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo "<h6 class='text-light m-1'>Email already exists.</h6><hr>";
    }  else{
        if($password == $confirm){
            $sql = "INSERT INTO users (name, email, password) VALUES('$name', '$email', '$password')";
            mysqli_query($conn, $sql);
            echo "<h6 class='text-light m-1'>Registration successful.</h6><hr>";
            // var_dump ($name, $email, $password);

        } else{
            echo "<h6 class='text-light m-1'>Passwords do not match.</h6><hr>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BesToBe</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- link css --> 
    <link rel="stylesheet" href="home.css">
    <!-- link -->
    <script src="https://kit.fontawesome.com/6c36406174.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- link icon image -->
    <link rel="apple-touch-icon" type="image/png" sizes="16x16" href="./assets/ventilateur.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/ventilateur.png">
    
</head>
<body>
  <!-- <div class="imagehome"> -->
    <div class = "container-fluid p-2">
  <!-- navbar -->
  <div class="topnav">
    <a href="index.php"><img src="./assets/ventilateur.png" width="30" alt="logo"> <b>BesToBe</b></a>
    <a href="./auth/home.php">Home</a>
    <a href="sign.php" class="split">Log in</a>
  </div>
</div>
    
<section class="vh-50 mt-3 mb-5">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px; box-shadow: 5px 5px 10px #203056;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Sign up now</h2>

              <form action="" method="post">
                <div class="form-outline mb-4">
                  <label for="name" style="font-weight: 600;">Enter your name </label>
                  <input type="text" name="name" id="name" required value="" placeholder="Name" class="form-control form-control-md">
                </div>

                <div class="form-outline mb-4">
                  <label for="email" style="font-weight: 600;">Enter your email address</label>
                  <input type="text" name="email" id="email" required value="" placeholder="Email address" class="form-control form-control-md">
                </div>

                <div class="form-outline mb-4">
                  <label for="password" style="font-weight: 600;">Choose a password </label>
                  <input type="password" name="password" id="password" required value="" placeholder="Password" class="form-control form-control-md">
                </div>

                <div class="form-outline mb-4">
                  <label for="rptpassword" style="font-weight: 600;">Confirm password </label>
                  <input type="password" name="rptpassword" id="rptpassword" required value="" placeholder="Confirm" class="form-control form-control-md">
                </div>

                <div class="form-check d-flex mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" name="TOS" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree to all statements in <a href="#!" class="text-body"><u>Terms of service.</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" name="submit"
                    class="btnsign btn btn-success btn-block btn-lg gradient-custom-4 text-light text-uppercase">Sign up</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- image home container -->
<!-- </div> -->

<!-- container -->
<div class="container1">
  <div class="text">
    <h1>Enjoy on your TV.
      </h1>
      <p>
          Watch on Smart TVs, Playstation, Xbox, <br>
          Chromecast, Apple TV, Blu-ray players, and<br>
          more.
      </p>
  </div>
  <div class="image">
  <img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png">
  </div>
</div>
<div class="container2">
    <div class="image">
<img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/mobile.png">
    </div>
    <div class="text px-3">
        <h1>Download your shows to watch on the go.
          </h1>
          <p>
              Save your data and watch all your favourites offline.
          </p>
      </div>
  </div>
  <div class="container1">
      <div class="text">
        <h1>Watch everywhere.</h1>
          <p>
              Stream unlimited movies and TV shows on <br>your phone, tablet, laptop,  and TV without paying more.
          </p>
      </div>
      <div class="image">
<img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/device-pile.png">
      </div>
    </div>

    <footer class="footer p-2 footer-container">
  <p>Any questions? Contact us 1-866-579-7172</p>
  <div class="footer-cols">
    <ul>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">Ways To Watch</a></li>
      <li><a href="#">Getflix Originals</a></li>
    </ul>
    <ul>
      <li><a href="#">Help Center</a></li>
      <li><a href="#">Terms Of Use</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <ul>
      <li><a href="#">Account</a></li>
      <li><a href="#">Privacy</a></li>
      <li><a href="#">Speed Test</a></li>
    </ul>
    <ul>
      <li><a href="#">Media Center</a></li>
      <li><a href="#">Cookie Preferences</a></li>
      <li><a href="#">Legal Notices</a></li>
    </ul>
  </div>
</footer>

  <script src="myscripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>