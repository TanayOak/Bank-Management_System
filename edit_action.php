<?php 




 $id =$_POST['id'];

$username=$_POST['username'];
 $password=$_POST['password'];
 $name=$_POST['name'];
 $DOB=$_POST['dob'];
 $gender=$_POST['gender'];
$acctype=$_POST['accttype'];
 $Nname=$_POST['Nname'];
 $adhaar=$_POST['adhaar'];
 $address=$_POST['balance'];
$balance=$_POST['balance'];

$conn=mysqli_connect('localhost','root','') or die(mysqli_error());

$select_db=mysqli_select_db($conn,'banking') or die(mysqli_error());

$sql="UPDATE adduser SET Username='$username',
                        Password='$password',
                        Name='$name',
                        DOB='$DOB',
                        Gender='$gender',
                        AccountType='$acctype',
                        NomineeName='$Nname',
                        AdhaarNo='$adhaar',
                        Address='$address',
                        Balance='$balance'
                        WHERE AccountNo='$id'";

$result=mysqli_query($conn,$sql) or die( mysqli_error($conn));
if($result ==true){
    
    echo "update successfull";
    
}else{
    
    echo"Error";
}

?>