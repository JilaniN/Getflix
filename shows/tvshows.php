<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link css -->
    <!-- <link rel="stylesheet" href="shows.css"> -->
    <link rel="stylesheet" href="shows.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">
    <!-- link icon in head -->
    <link rel="apple-touch-icon" type="image/png" sizes="16x16" href="./assets/ventilateur.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/ventilateur.png">
    <title>Music videos</title>
</head>
<body class='mb-4 mx-3'>
    <!-- navbar -->
<div class="topnav">
  <a href="../index.php"><img src="../assets/ventilateur.png" width="30" alt="logo"> <b>BesTube</b></a>
  <a href="../index.php">Home</a>
  <a href="./shows/movies.php?id=<?php echo $youtubePL4; ?>">Movies</a>
  <a href="./shows/tvshows.php?id=<?php echo $youtubePL2; ?>">Music</a>
  <div class="dropdown">
    <button class="dropbtn">Categories</button>
    <div class="dropdown-content">
      <a href="./shows/sport.php?id=<?php echo $youtubePL1; ?>">Sport</a>
      <a href="./shows/cooking.php?id=<?php echo $youtubePL3; ?>">Cooking</a>
      <a href="./shows/gaming.php?id=<?php echo $youtubePL3; ?>">Gaming</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">My account</button>
    <div class="dropdown-content">
      <!-- <a href="sign.php">Log in</a> -->
      <a href="../logout.php">Log out</a>
    </div>
  </div>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<div class='containervideo'>
<?php include_once("showsConn.php") ?>
</div>

<footer class="footer p-2">
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
<!-- link script js -->
<script src="myscript.js"></script>
</body>
</html>