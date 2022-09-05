<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$status="Pending";



 $conn = new mysqli('localhost','root','','banking');
    if ($conn->connect_error) {
     die('Connection Failed : '.$conn->connect_error);
    }else
    {
    //Prepare statement
      $stmt =$conn->prepare("insert into contact(Name,Email,Subject,Message,Status) values(?, ?, ?, ?, ?)");
      $stmt->bind_param("sssss",$name,$email,$subject,$message,$status);
      $stmt->execute();
      echo "Message Sent Succesfully";
    }
?>
<hmtl>
    <head>
        <title></title>
    </head>
    <body>
        <a href="home.html">go back</a>
            </body>
</hmtl>