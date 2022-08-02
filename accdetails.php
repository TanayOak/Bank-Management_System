<html>
<link rel="stylesheet" type="text/css" href="bank.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
<div id="Account info">
    
    <h2>Account Information</h2>
        <table>
        <tr>
            <th>Account no</th>
            <th>Username</th>>
            <th>name</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>NomineeName</th>
            <th>AccountType</th>
            <th>AdhaarNO</th>
            <th>Address</th>
            <th>Balance</th>
           
            
            
        
        
        </tr>

<?php  
    
 $username=$_GET['username'];

 $conn = new mysqli('localhost','root','','banking');

$select_db=mysqli_select_db($conn,'banking') or die(mysqli_error());
$sql="SELECT * FROM adduser WHERE Username='$username'";
$result=mysqli_query($conn,$sql) or die;
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
</tr>
                
                <?php
                }
            }
    ?>
            </table>
    </div>
           
<div id="TransactionHistory">
    
    <h2>Transaction history</h2>
    
    
    <h2>Account Information</h2>
        <table>
        <tr><th>ID</th>
            <th>IFSC_CODE</th>
            <th>Beneficiaryname</th>>
            <th>Amount</th>
            <th>TransactionType</th>
            <th>Accountno</th>
           
            
        
        
        </tr>

<?php  
    
 $username=$_GET['username'];

 $conn = new mysqli('localhost','root','','banking');

$select_db=mysqli_select_db($conn,'banking') or die(mysqli_error());
$sql="SELECT * FROM $username ";
$result=mysqli_query($conn,$sql) or die;
if($result==true){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['Trans_id'];
        $IFSC=$row['IFSC_CODE'];
        $amount=$row['Amount'];
        $Bname=$row['Beneficiaryname'];
        $transactionttype=$row['TransactionType'];
        $accnumber=$row['Accountno'];
      
         ?> 
                
        <tr>
        <td> <?php echo $id ;?></td>   
        <td> <?php echo $IFSC; ?></td>
        <td> <?php echo $Bname; ?></td>  
        <td> <?php echo $amount; ?></td>     
        <td> <?php echo $transactionttype;     ?></td>
        <td> <?php echo $accnumber ; ?></td>
      
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