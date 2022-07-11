<?php

//to connect to my database on my localhost
include_once 'db.php';

// registration form :

// submit, name, email and password -> names tag of form on html page

if(isset($_POST['submit']))
{    
     $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
     $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
     $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
         
     $sql = "INSERT INTO users (name, email, password)
     VALUES ('$name', '$email', '$password')";

     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        
      // Change location with the registration form html page.
      //  header("location:test.php"); 
   
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

}


//Check email and password to log in :

if(isset($_POST['login']))
{
    if(isset($_POST['username'])  && isset($_POST['passwordLog']))
    {

    $name = filter_var($_POST['username'], FILTER_SANITIZE_STRING);   
    $password = filter_var($_POST['passwordLog'], FILTER_SANITIZE_STRING);

    $sqlCheck = "SELECT * FROM users WHERE name='$name' AND password='$password'";

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
?>