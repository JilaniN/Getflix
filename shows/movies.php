<?php 
$API_key = 'AIzaSyADr5BLQb1yjMtHftZIhhUEj96FvESVLMM';
$channelID = 'PL4WiRZw8bmXvAw7LyLC3LIuLDoagogZdb';
$maxResults = '15';

$apiError = 'Video not found';
try{
  $apiData = @file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet%2C+id&playlistId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.'');
  if($apiData){
    $videolist = json_decode($apiData);
  } else {
    throw new Exception('Invalid API key or channel ID.');
  }
} catch(Exception $e){
    $apiError = $e->getMessage();
  }
?>

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
    <link rel="stylesheet" href="shows.css?v=<?php echo time(); ?>">
    <!-- link icon in head -->
    <link rel="apple-touch-icon" type="image/png" sizes="16x16" href="./assets/ventilateur.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/ventilateur.png">
    <title>Movies</title>
</head>
<body>

    <!-- navbar -->
<div class="topnav">
  <a href="#home"><img src="../assets/ventilateur.png" width="30" alt="logo"> <b>BesToBe</b></a>
  <a href="../index.php">Home</a>
  <a href="./movies.php">Movies</a>
  <a href="./tvshows.php">Music</a>
  <div class="dropdown">
    <button class="dropbtn">Categories</button>
    <div class="dropdown-content">
      <a href="./sport.php">Sport</a>
      <a href="./cooking.php">Cooking</a>
      <a href="./gaming.php">Gaming</a>
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

<div  class="container">
  <h1 class="head">Videos</h1>
  <?php
  if(!empty($videolist->items)){
    foreach($videolist->items as $item){
      if(isset($item->id->videoid)){
        ?>
        <div class="yvideo-box">
          <iframe width="280" height="150" src="https://www.youtube.com/embed/<?php echo $item->id->videoid; ?>" frameborder="0"  allowfullscreen></iframe>
            <h4><?php echo $item->snippet->title; ?></h4>
        </div>
        <?php
      }
    }
  } else{
    echo '<p class="error">'.$apiError.'</p>';
  }
  ?>
</div>

</body>
</html>