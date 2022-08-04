<?php
$videoID= $_GET['id'];
$maxResults = 15;
$API_key = 'AIzaSyADr5BLQb1yjMtHftZIhhUEj96FvESVLMM';

$apiError = 'Video not found';
try{
    $apiData = @file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet%2C+id&playlistId='.$videoID.'&maxResults='.$maxResults.'&key='.$API_key.'');
    if($apiData){
      $videolist = json_decode($apiData);
    } else {
      throw new Exception('Invalid API key or channel ID.');
    }
  } catch(Exception $e){
      $apiError = $e->getMessage();
    }

    if(!empty($videolist->items)){
        for($x=0; $x<$maxResults; $x++){
          if(isset($videolist->items[$x]->snippet->resourceId->videoId)){
            ?>
            <div class="video " id="playercat">
            <iframe width='560' height='315' src="https://www.youtube.com/embed/<?php echo $videolist->items[$x]->snippet->resourceId->videoId; ?>" title="YouTube video" allowfullscreen frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
          </div>
          <?php
          }
        }
      }else{
        echo '<p class="error">'.$apiError.'</p>';
      }
?>