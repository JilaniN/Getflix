<?php
// set comments
function setComments($pdo){
    if(isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comment (uid, date, message) VALUES ('$uid', '$date', '$message')";
        // $result = $conn->query($sql);
        $result = $pdo->query($sql);
    }   
}

//get comments
function getComments($pdo){
    $sql = "SELECT * FROM comment";
    $result = $pdo->query($sql);
    while($row = $result->fetch()){
        $id = $row['uid'];
        $sql2 = "SELECT * FROM users WHERE id='$id'";
        $result2 = $pdo->query($sql2);
        if($row2 = $result2->fetch()){
            echo "<div class='commentbox'>";
            echo $row2['uid'] . "<br>";
            echo $row['date'] . "<br>";
            echo nl2br ($row['message']);
            if(isset($_SESSION['id'])){
                if($_SESSION['id'] == $row2['id']){
                    // edit comment 
            echo "<form class='edit' method='POST' action='editcomment.php'>
            <input type='hidden' name='cid' value='".$row['cid']."'>
            <input type='hidden' name='uid' value='".$row['uid']."'>
            <input type='hidden' name='date' value='".$row['date']."'>
            <input type='hidden' name='message' value='".$row['message']."'>
            <button>Edit</button>
            </form>";
            // delete comment
            echo "<form class='deleteform' method='POST' action='".deleteComments($pdo)."'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <button type='submit' name='commentDelete'>Delete</button>
             </form>";
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

        $sql = "DELETE FROM comment WHERE cid='$cid'";
        $result = $pdo->query($sql);
        header("Location: index.php");
    }
}

// edit comments function
function editComments($pdo){
    if(isset($_POST['commentSubmit'])){
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "UPDATE comment SET message='$message' WHERE cid='$cid'";
        $result = $pdo->query($sql);
        header("Location: index.php");
    }
}

// login
function getLogin($pdo){
    if(isset($_POST['loginSubmit'])){
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        $sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";
        $result = $pdo->query($sql);
        if($result->rowCount() > 0){
            if($row = $result->fetch()){
                $_SESSION['id'] = $row['id'];
                header("Location: index.php?loginsuccess");
                exit();
        } else{
            header("Location: index.php?loginfailed");
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
        header("Location: index.php");
        exit();
    }
}