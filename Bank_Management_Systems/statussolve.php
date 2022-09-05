<?php 

$id=$_GET['id'];

$conn=mysqli_connect('localhost','root','') or die(mysqli_error());

$select_db=mysqli_select_db($conn,'bank') or die(mysqli_error());
$status="solved";

// SQL QUERY TO DELETE THE ENTRY
$sql="UPDATE contact SET Status='$status' WHERE RequestID=".$id;
$result=mysqli_query($conn,$sql) or die( mysqli_error($conn));
if($result ==true){
    
    echo "Status Updated Succesfully";
    
}else{
    
    echo "Error";
}


?>