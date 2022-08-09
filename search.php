<!-- php for the searchbar -->
<?php

  include_once('config.php');

  if (isset($_POST['submitSearch'])) {

    $background = 1;

    $search = $_POST['search'];

    $sql = "SELECT * FROM videos WHERE name LIKE '%".$search."%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0){

      ?>
      <div  class="container">  
      <div class='containervideo'>
      <div class="row justify-content-around">
  <?php
      
      while($row = $result->fetch_assoc() ){
?>    
 
  <a id="linkphp" href="./auth/index.php?id=<?php echo $row["id"]; ?> ">
    <div class="card my-5">        
      <iframe width="85%" src="https://www.youtube.com/embed/<?php echo $row["id"]; ?>  "title="YouTube video" allowfullscreen frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
      <div class="card-body" style="background-color:#eae9e7;">
        <p class="card-text" id="titleVideo"><?php echo $row["name"]; ?> </p>
      </div> 
    </div>
  </a>

<?php

        }
        ?>
      </div>
      </div>
      </div>
      <?php
    } else {
?> 
          <p style="color: white">
<?php
      echo "0 records";
?>
           </p>
<?php
     }
 
  }
                                  
$conn->close();
?>
