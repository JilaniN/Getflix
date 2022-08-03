<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <!-- link icon in head -->
    <link rel="apple-touch-icon" type="image/png" sizes="16x16" href="../assets/ventilateur.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/ventilateur.png">
    <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="sign.css">

</head>

<body>
    <!-- navbar -->
<div class="topnav">
  <a href="index.php"><img src="./assets/ventilateur.png" width="30" alt="logo"> <b>BesToBe</b></a>
  <a href="index.php">Home</a>
  <a href="./shows/movies.php">Movies</a>
  <a href="./shows/tvshows.php">Music</a>
  <div class="dropdown">
    <button class="dropbtn">Categories</button>
    <div class="dropdown-content">
      <a href="./shows/sport.php">Sport</a>
      <a href="./shows/cooking.php">Cooking</a>
      <a href="./shows/gaming.php">Gaming</a>

    </div>
  </div>

<div class="container py-4">

<form id="contactForm">

  <!-- Name input -->
  <div class="mb-3">
    <label class="form-label text-primary" for="name">Name</label>
    <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
  </div>

  <!-- Email address input -->
  <div class="mb-3">
    <label class="form-label text-primary" for="emailAddress">Email Address</label>
    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
  </div>

  <!-- Message input -->
  <div class="mb-3">
    <label class="form-label text-primary" for="message">Message</label>
    <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
    <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
  </div>

  <!-- Form submissions success message -->
  <div class="d-none" id="submitSuccessMessage">
    <div class="text-center mb-3">Form submission successful!</div>
  </div>

  <!-- Form submissions error message -->
  <div class="d-none" id="submitErrorMessage">
    <div class="text-center text-danger mb-3">Error sending message!</div>
  </div>

  <!-- Form submit button -->
  <div class="d-grid">
    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
  </div>

</form>
<footer class="footer p-2">
  <div class="footer-cols ">
    <ul>
      <li><a href="/faq.php">FAQ</a></li>
    </ul>
    <ul>
      <li><a href="./contact.php">Contact Us</a></li>
    </ul>
    <ul>
    <li><a href="#">BesToBe Originals</a></li>
    </ul>
    <ul>
      <li><a href="#">Copyright 2022 BesTOBe</a></li>
   </ul>
  </div>
</footer>

</div>
<script src="myscripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>