<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$DOB=$_POST['dob'];
$gender=$_POST['gender'];
$acctype=$_POST['accttype'];
$Nname=$_POST['Nname'];
$adhaar=$_POST['adhaar'];
$address=$_POST['address'];
$balance=$_POST['balance'];


 $conn = new mysqli('localhost','root','','banking');
    if ($conn->connect_error) {
     die('Connection Failed : '.$conn->connect_error);
    }else
    {
    //Prepare statement
      $stmt =$conn->prepare("insert into adduser(Username,Password,Name,DOB,Gender,AccountType,NomineeName,AdhaarNo,Address,Balance) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sssssssssi",$username,$password,$name,$DOB,$gender,$acctype,$Nname,$adhaar,$address,$balance);
      $stmt->execute();
      echo "New record inserted sucessfully";
        
        $sql ="CREATE TABLE IF NOT EXISTS $username(Trans_id int AUTO_INCREMENT ,IFSC_CODE VARCHAR(50),Beneficiaryname varchar(50),Amount int(20),TransactionType VARCHAR(100), Accountno int ,Primary key(Trans_id) )";
        $result=mysqli_query($conn,$sql) or die('Connection Failed : '.$conn->connect_error);
    
     $stmt->close();
     $conn->close();
    }
?>
<hmtl>
    <head>
        <title></title>
    </head>
    <body>
        <a href="adminlogin.html">go back</a>
            </body>
</hmtl>