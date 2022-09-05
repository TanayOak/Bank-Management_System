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
            <th>AccountNo</th>
            <th>Username</th>>
            <th>name</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>NomineeName</th>
            <th>AccountType</th>
            <th>AdhaarNO</th>
            <th>Address</th>
            <th>Balance</th>
            <th>Update/Delete</th>
            
            
        
        
        </tr>
                
               <?php      
$conn=mysqli_connect('localhost','root','') or die(mysqli_error());

$select_db=mysqli_select_db($conn,'banking') or die(mysqli_error());

$sql="SELECT * FROM adduser";
$result=mysqli_query($conn,$sql) or die(mysqli_error());
                 $cn=1;
if($result==true){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['AccountNo'];
        $username=$row['Username'];
        $name=$row['Name'];
        $dob=$row['DOB'];
        $gender=$row['Gender'];
        $Acctype=$row['AccountType'];
        $Nname=$row['NomineeName'];
        $adhaar=$row['AdhaarNo'];
        $address=$row['Address'];
        $balance=$row['Balance'];
       
        
    ?> 
                
        <tr>
        <td> <?php echo $id ;?></td>   
        <td> <?php echo $username; ?></td>
        <td> <?php echo $name; ?></td>  
        <td> <?php echo $dob;     ?></td>
        <td> <?php echo $gender ; ?></td>
        <td> <?php echo $Nname; ?></td>  
        <td> <?php echo $Acctype ; ?></td>
        <td> <?php echo $adhaar; ?></td>
        <td> <?php echo $address ;?></td>
        <td> <?php echo $balance; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $id; ?>"><input type="button" value="Update"></a>   
          
         <a href="delete.php?id=<?php echo $id ; ?>"><input type="button" value="Delete"></a>     </td>
            
        
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
        <a href="adminlogin.html">go back</a>
            </body>
</hmtl>