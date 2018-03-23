<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "windmill_ventures_limited";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
    if (isset($_POST['submit'])) 
    {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $message = $_POST['message'];
    // die($email);
    $sql = "INSERT INTO requests (firstname,lastname,email,phonenumber,message)
    VALUES ('$firstname','$lastname','$email','$phonenumber','$message')";

    $result = $conn->query($sql);

    if ($result) 
    {
        echo "Request Sent Successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
         
    }else{
        echo "Please make a submission!";
    }


  
?>