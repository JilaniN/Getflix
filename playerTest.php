<?php
$item= $_GET['id'];

$API_key = 'AIzaSyADr5BLQb1yjMtHftZIhhUEj96FvESVLMM';
$channelID = 'UCJZv4d5rbIKd4QHMPkcABCw';


$apiError = 'Video not found';
try{
  $apiData = @file_get_contents('https://www.googleapis.com/youtube/v3/videos?id='.$item.'&key='.$API_key.'&part=snippet');
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
    <title><?php echo $videolist->items[0]->snippet->title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- Navbar  -->
<nav class="navbar navbar-expand-md">
    <div class="container-fluid">

        <!-- Example Logo Image -->
        <img src="../images/1e41525f15860246b40f3c0c9197b59d.jpg" width="100" alt="" class="d-inline-block align-middle me-1 mr-2">
  
        <!-- Name of the site and home link -->
        <a class="navbar-brand text-light" href="index.html"><b>DarkView</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link text-light" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="categories.html">Categories</a>
            </li>
            <li class="nav-item op">
            <a class="nav-link text-light" href="movies.html">Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="tv.html">TV Shows</a>
            </li>

            <div class="navbar-collapse dual-collapse2 me-auto">

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Languages
                  </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">French</a>
                          <a class="dropdown-item" href="#">Dutch</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                      </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                  </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">XXX</a>
                          <a class="dropdown-item" href="#">XXX</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Settings</a>
                      </div>
              </li>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
              </form>
            </div>
            
        </ul>
        </div>
    </div>
</nav>
<!-- Title -->
<h1 class="text-light">
<?php echo $videolist->items[0]->snippet->title;  ?>
       
</h1>
<!-- Player -->
    <div class="ratio ratio-16x9" id="player">
        <iframe class="embed-responsive embed-responsive-16by9" src="https://www.youtube.com/embed/<?php echo $item; ?>?autoplay=1" title="YouTube video" allowfullscreen ></iframe>
      </div>
<br>
<!-- Description -->
<div class="card bg-dark text-light ms-4 me-4">
  <div class="card-body p-3" id="description">
    <p>
  <?php echo $videolist->items[0]->snippet->description;  ?></p>
  </div>
</div>
<!-- Comments -->
<section>
    <div class="container text-light">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
                <h1>Comments</h1>
                <div class="comment mt-4 text-justify float-left">
                    <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Jhon Doe</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                <div class="text-justify darker mt-4 float-right">
                    <img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Rob Simpson</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                <div class="comment mt-4 text-justify">
                    <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Jhon Doe</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                <div class="darker mt-4 text-justify">
                    <img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Rob Simpson</h4>
                    <span>- 20 October, 2018</span>
                    <br>
                    <p >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form">
                    <div class="form-group">
                        <h4>Leave a comment</h4>
                        <label for="message">Message</label>
                        <textarea name="msg" id=""msg cols="30" rows="5" class="form-control" style="background-color: black;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <p class="text-secondary">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</p>
                    </div>
                    <div class="form-inline">
                        <input type="checkbox" name="check" id="checkbx" class="mr-1">
                        <label for="subscribe">Subscribe me to the newlettter</label>
                    </div>
                    <div class="form-group">
                        <button type="button" id="post" class="btn">Post Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>