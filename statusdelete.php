<?php 

$id=$_GET['id'];

$conn=mysqli_connect('localhost','root','') or die(mysqli_error());

$select_db=mysqli_select_db($conn,'banking') or die(mysqli_error());


// SQL QUERY TO DELETE THE ENTRY
$sql="DELETE FROM contact WHERE RequestID=".$id;

$result=mysqli_query($conn,$sql) or die( mysqli_error($conn));
if($result ==true){
    
    echo "The record Deleted Succesfully";
    
}else{
    
    echo "Error";
}


?>