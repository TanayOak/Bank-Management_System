<html>
<link rel="stylesheet" type="text/css" href="bank.css">

<!--
    
//$conn=mysqli_connect('localhost','root','') or die(mysqli_error());
//
//$select_db=mysqli_select_db($conn,'banking') or die(mysqli_error());
//
//$sql="SELECT * FROM adduser";
//$result=mysqli_query($conn,$sql) or die(mysqli_error());
//if($result==true){
//    while($row=mysqli_fetch_assoc($result)){
//        $id=$row['AccountNo'];
//        $username=$row['Username'];
//        $name=$row['Name'];
//        $dob=$row['DOB'];
//        $gender=$row['Gender'];
//        $Acctype=$row['AccountType'];
//        $Nname=$row['NomineeName'];
//        $adhaar=$row['AdhaarNo'];
//        $address=$row['Address'];
//        $balance=$row['Balance'];
//        $an=1;
-->
        

        <div id="Table">
            <table>
        <tr>
            <th>RequestID</th>
            <th>Name</th>>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Status</th>
            <th>Action</th>
        
        
        </tr>
                
<?php      
$conn=mysqli_connect('localhost','root','') or die(mysqli_error());

$select_db=mysqli_select_db($conn,'banking') or die(mysqli_error());

$sql="SELECT * FROM contact";
$result=mysqli_query($conn,$sql) or die(mysqli_error());
                 $cn=1;
if($result==true){
    while($row=mysqli_fetch_assoc($result)){
        $reqid=$row['RequestID'];
        $name=$row['Name'];
        $email=$row['Email'];
        $subject=$row['Subject'];
        $message=$row['Message'];
        $status=$row['Status']; 
    ?> 
                
        <tr>
        <td> <?php echo $reqid ;?></td>   
        <td> <?php echo $name; ?></td>
        <td> <?php echo $email; ?></td>  
        <td> <?php echo $subject; ?></td>
        <td> <?php echo $message ; ?></td>
        <td> <?php echo $status; ?></td>  
        <td>
            <a href="statussolve.php?id=<?php echo $reqid?>"><input type="button" value="Mark Solved"></a>
            <a href="statusdelete.php?id=<?php echo $reqid?>"><input type="button" value="Delete"></a>
            
            
            
            </td>
       
        
        </tr>
                
                <?php
                }
            }
    ?>
            </table>
    </div>
                
        
</html>
<hmtl>
    <head>
        <title></title>
    </head>
    <body>
        <a href="home.html">go back</a>
            </body>
</hmtl>
    