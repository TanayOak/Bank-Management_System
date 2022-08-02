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

   $query="SELECT * FROM Admin WHERE Username='$uname' AND Password='$pass' ";
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
					<li><a href="login.html" style="color: inherit;">Login</a></li>
                    <li><a href="signup.html" style="color: inherit;"> About us</a></li>
					<li id="opt1">Admin Login</li>
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
           <a href="contactview.php"><img src="grev.png"></a>
          <div class="name1">Grievance</div>
          <div class="roll1">Request's made by customers</div>
        </div>

        <div class="box">
          <a href="userupdate.php"><img src="manage.png"></a>
          <div class="name1">Manage Customers</div>
          <div class="roll1">View and Manage accounts of customer</div>
        </div>

        <div class="box">
          <a href="register.html"><img src="new.png"></a>
          <div class="name1">Open New Account</div>
          <div class="roll1">Open New Account on request of customers</div>

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