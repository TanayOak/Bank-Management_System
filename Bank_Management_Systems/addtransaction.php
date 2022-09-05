<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$username=$_POST['username'];
$IFSC=$_POST['IFSC'];
$Beneficiaryname=$_POST['bname'];
$accnumber=$_POST['accnumber'];
$amounts=$_POST['amount'];
$transactiontype="Online Transfer";


 $conn = new mysqli('localhost','root','','banking');
    if ($conn->connect_error) {
     die('Connection Failed : '.$conn->connect_error);
    }else
    {
    //Prepare statement
      $stmt =$conn->prepare("insert into $username(IFSC_CODE,Beneficiaryname,Amount,TransactionType,Accountno)values(?, ?, ?, ?, ?)");
     $stmt->bind_param("ssisi",$IFSC,$Beneficiaryname,$amounts,$transactiontype,$accnumber);
      $stmt->execute();
                
    
     $stmt->close();
     $conn->close();
        
        
$conn=mysqli_connect('localhost','root','') or die(mysqli_error());

$select_db=mysqli_select_db($conn,'banking') or die(mysqli_error());

$sql="SELECT * FROM adduser WHERE Username='$username'";
$result=mysqli_query($conn,$sql) or die(mysqli_error());
                 
if($result==true){
    while($row=mysqli_fetch_assoc($result)){
        
        $balance=$row['Balance'];
        
        
        
        
       
    }
    if($balance >= $amount){
    $sql="UPDATE adduser SET Balance=($balance-$amount) WHERE Username='$username'";
    $result=mysqli_query($conn,$sql) or die;
    if($result==true){
        echo "Balance update done  successfull";
    }else{
        
        echo "erro in transaction please Try again later";
    }
        }else
            {echo "Insufficient balance Aukaat me reh baba";}
    }
}

                     

        