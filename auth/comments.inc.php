<?php
// set comments
function setComments($pdo){
    if(isset($_POST['commentSubmit'])){
        $name = $_POST['name'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comment (name, date, message) VALUES ('$name', '$date', '$message')";
        // $result = $conn->query($sql);
        $result = $pdo->query($sql);
    }   
}

//get comments
function getComments($pdo){
    $sql = "SELECT * FROM comment";
    $result = $pdo->query($sql);
    while($row = $result->fetch()){
        $id = $row['name'];
        $sql2 = "SELECT * FROM users WHERE id='$id'";
        $result2 = $pdo->query($sql2);
        if($row2 = $result2->fetch()){
            echo "<div class='commentbox'>";
            echo $row2['name'] . "<br>";
            echo $row['date'] . "<br>";
            echo nl2br ($row['message']);
            if(isset($_SESSION['id'])){
                if($_SESSION['id'] == $row2['id']){

            // edit comment 
            // echo "<form class='edit' method='POST' action='editcomment.php'>
            // <input type='hidden' name='cid' value='".$row['cid']."'>
            // <input type='hidden' name='name' value='".$row['name']."'>
            // <input type='hidden' name='date' value='".$row['date']."'>
            // <input type='hidden' name='message' value='".$row['message']."'>
            // <button>Edit</button>
            // </form>";

            // delete comment
            echo "<form class='deleteform' method='POST' action='".deleteComments($pdo)."'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <button type='submit' name='commentDelete'>Delete</button>";

                // delete page not working
                // echo '<a href="delete.php?cid='. $row['cid'] .'" title="Delete" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';

             echo "</form>";
             
                }
            }

            echo "</div>";
            
        }
    }
}

// delete comments function
function deleteComments($pdo){
    if(isset($_POST['commentDelete'])){
        $cid = $_POST['cid'];
        $item = $_POST['id']; // error with yt videos when delete message

        $sql = "DELETE FROM comment WHERE cid='$cid'";
        $result = $pdo->query($sql);
        // header("Location: index.php");
        echo '<script> location.replace("index.php"); </script>';
    }
}

// edit comments function
// function editComments($pdo){
//     if(isset($_POST['commentSubmit'])){
//         $cid = $_POST['cid'];
//         $uid = $_POST['uid'];
//         $date = $_POST['date'];
//         $message = $_POST['message'];

//         $sql = "UPDATE comment SET message='$message' WHERE cid='$cid'";
//         $result = $pdo->query($sql);
//         header("Location: index.php");
//     }
// }

// login
function getLogin($pdo){
    if(isset($_POST['loginSubmit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $item = $_POST['id'];

        $sql = "SELECT * FROM users WHERE name='$name' AND password='$password'";
        $result = $pdo->query($sql);
        if($result->rowCount() > 0){
            if($row = $result->fetch()){
                $_SESSION['id'] = $row['id'];
                // header("Location: home.php?loginsuccess");
                echo '<script> location.replace("home.php"); </script>';
                exit();
        } else{
            // header("Location: home.php?loginfailed");
            echo '<script> location.replace("home.php"); </script>';
            exit();
        }
    }
}
}

// logout
function userLogout(){
    if(isset($_POST['logoutSubmit'])){
        session_start();
        session_destroy();
        // header("Location: index.php");
        echo '<script> location.replace("home.php"); </script>';
        exit();
    }
}

// Youtube API

// $item= $_GET['id'];

$API_key = 'AIzaSyADr5BLQb1yjMtHftZIhhUEj96FvESVLMM';

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

