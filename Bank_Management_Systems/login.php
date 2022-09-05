<!DOCTYPE html>
<html lang ="en">


<?php 

$uname=$_POST['username'];
$pass=$_POST['password'];

 $conn = new mysqli('localhost','root','','banking');
    if ($conn->connect_error) {
     die('Connection Failed : '.$conn->connect_error);
    }else{

if(isset($_POST['username'])){

   $query="SELECT * FROM adduser WHERE Username='$uname' AND Password='$pass' ";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)){
     
        while($row=mysqli_fetch_assoc($result)){
     
        $username=$row['Username'];
        $password=$row['Password'];
        $name=$row['Name'];
        ?>
    
            <html>
<head>
	<title> LOGIN</title>
	<link rel="stylesheet" type="text/css" href="bank.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>

	<div class="bgimage1">
		<div class="nav">
			
			<div class="nav1">
				<h4> BRAVOS BANK </h4>
			</div>

			<div class="nav2">
				<ul>
                    <li><a href="home.html" style="color: inherit;"> HOME</a> </li>
					<li><a href="services.html" style="color: inherit;"> Services</a></li>
					<li id="opt1">Login</li>
                    <li><a href="aboutus.html" style="color:inherit;"> About us</a></li>
					<li><a href="adminlogin.html" style="color: inherit;">Admin Login</a></li>
				</ul>
			</div>
            </div>
        <Center><h1>Welcome <?php echo $name; ?></h1></Center>
        
        
        <div class="welcome">
        </div>
            <div class="team-section">
    <div class="inner-width">

 <div class="inner-width">
        <div class="box">
           <a href="accdetails.php ?username=<?php echo $username; ?>"> <img src="details.svg"></a>
          <div class="name1">ACCOUNT DETAILS</div>
            <div class="roll1">CHECK YOUR ACCOUNT DETAILS</div>
        </div>

        <div class="box">
            <a href="transaction.php ?username=<?php echo $username; ?>"> <img src="send.svg"></a>
          <div class="name1">FUND TRANSFER</div>
            <div class="roll1">TRANSFER FUND EASILY TO ANY ACCOUNT</div>
        </div>

        <div class="box">
          <a href="contact.html"><img src="update.svg"></a>
            <div class="name1">UPDATE DETAILS</div>
          <div class="roll1">UPDATE YOUR ACCOUNT DETAILS EASILY</div>

      </div>

      </div>


        </div>
    </div>
    </div>
</body>
</html>
          <?php
       }
    }
    else{
        echo"Incorrect Username or Password";
   }
}
}
?>