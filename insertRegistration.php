<?php

//to connect to my database on my localhost
include_once 'db.php';

// registration form :

if(isset($_POST['submit']))
{    
     $name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
     $email = filter_var($_POST['Email'], FILTER_SANITIZE_STRING);
     $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
     $repeatPassword = filter_var($_POST['rptpassword'], FILTER_SANITIZE_STRING);
    
     //check if passwords match:

     if($password == $repeatPassword ){

     $sql = "INSERT INTO users (name, email, password)
     VALUES ('$name', '$email', '$password')";


        if (mysqli_query($conn, $sql)) {

        echo "New record has been added successfully !";
        
        // Change location with the registration form html page.
        //  header("location:test.php"); 
        }
        else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
    }
    else{
        echo "Passwords do not match. Try again!";
    }
     mysqli_close($conn);

}


//Check email and password to log in :


if(isset($_POST['login']))
{
    if(isset($_POST['email'])  && isset($_POST['Pswd']))
    {

    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);   
    $password = filter_var($_POST['Pswd'], FILTER_SANITIZE_STRING);

    $sqlCheck = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sqlCheck);   

    $num = mysqli_num_rows($result);
   
        if($num > 0) {
             echo "You are connected";

            //location name of main page
            //  header("location:testForm.php");
            }

            else{
                echo "Name or password are not correct";
            }
    
    mysqli_close($conn);
    }

}


//Button to disconnect:
//Work in progress
//change the name of button when we have it on html

if(isset($_POST['disconnect'])){
    header("location:home.html");
}




//For the remember me:
//Work in progress
//if(isset($_COOKIE["username"])) { echo $_COOKIE["username"];}



?>