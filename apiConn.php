<?php 
$API_key = 'AIzaSyADr5BLQb1yjMtHftZIhhUEj96FvESVLMM';
$youtubePL1 = 'PLW_c2xKfxEIqpPCrfw_twlTSWYiiwvnq-';
$youtubePL2= 'RDqWAqMzB31lQ';
$maxResults = '15';

$apiError = 'Video not found';

//api connection playlist 1
try{
  $apiData = @file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet%2C+id&playlistId='.$youtubePL1.'&maxResults='.$maxResults.'&key='.$API_key.'');
  if($apiData){
    $videolist = json_decode($apiData);
  } else {
    throw new Exception('Invalid API key or channel ID.');
  }
} catch(Exception $e){
    $apiError = $e->getMessage();
  }


//api connection playlist 2
try{
    $apiDataMusic = @file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet%2C+id&playlistId='.$youtubePL2.'&maxResults='.$maxResults.'&key='.$API_key.'');
    if($apiDataMusic){
      $videolistMusic = json_decode($apiDataMusic);
    } else {
      throw new Exception('Invalid API key or channel ID.');
    }
  } catch(Exception $e){
      $apiError = $e->getMessage();
    }

?>