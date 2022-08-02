<html>
<head>
	
<title> REGISTER</title>
	<link rel="stylesheet" type="text/css" href="bank.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>

	<div class="bgimage2">
		<div class="nav">
			
			<div class="nav1">
				<h4> BRAVOS BANK </h4>
			</div>

			<div class="nav2">
				<ul>
                    <li><a href="home.html" style="color: inherit;"> HOME</a> </li>
					<li><a href="services.html" style="color: inherit;"> Services</a></li>
					<li><a href="login.html" style="color: inherit;"> Login</a></li>
					<li><a href="aboutus.html" style="color: inherit;"> About-Us</a></li>
					<li id="opt1">Admin Login</li>
				</ul>
			</div>
            </div>
        <div class="login-box1">
  <h1>Register</h1>
            
            
            <?php 
            //getting value from url
            
            
            $id = (isset($_GET['id']) ? $_GET['id'] : '');
            $conn=mysqli_connect('localhost','root','') or die(mysqli_error());

            $select_db=mysqli_select_db($conn,'banking') or die(mysqli_error());
            $sql="SELECT * FROM adduser WHERE AccountNo=".$id;
            $result=mysqli_query($conn,$sql);
            if($result==true){
                $row=mysqli_fetch_assoc($result);
                $username=$row['Username'];
                $password=$row['Password'];
                $name=$row['Name'];
                $dob=$row['DOB'];
                $gender=$row['Gender'];
                $Acctype=$row['AccountType'];
                $Nname=$row['NomineeName'];
                $adhaar=$row['AdhaarNo'];
                $address=$row['Address'];
                $balance=$row['Balance'];

                
            }
            
            ?>
            
<form action="edit_action.php" method="POST">
  <div class="textbox1">
    <i class="fas fa-user"></i>
    <input type="text" value="<?php echo $username;?>" name="username">
  </div>

  <div class="textbox1">
    <i class="fas fa-lock"></i>
    <input type="password" value="<?php echo $password ;?>" name="password">
  </div>
<div class="textbox1">
    <i class="fa fa-address-card"></i>
    <input type="text" value="<?php echo $name ;?>"  name="name">
  </div>
<div class="textbox1">
    <i class="fa fa-birthday-cake"></i>
    <input type="text" value="<?php echo $dob ;?>"  name="dob">
  </div>
<div class="textbox1">
     <i class="fa fa-child"></i>
<select style="width: 90%" name="gender" >
    <option value=""><?php echo $gender ;?></option>
  <option value="male">Male</option>
  <option value="female">Female</option>
  <option value="other">Other</option>
</select>
</div>
<div class="textbox1">
     <i class="fa fa-check"></i>
<select style="width: 90%;" name="accttype">
       <option value=""><?php echo $Acctype ;?></option>
  <option value="current">Current</option>
  <option value="savings">Savings</option>
</select>
  </div>
<div class="textbox1">
    <i class="fa fa-heartbeat"></i>
    <input type="text" value="<?php echo $Nname;?>"  name="Nname">
</div>
<div class="textbox1">
    <i class="far fa-address-card"></i>
    <input type="text" value="<?php echo $adhaar ;?>"  name="adhaar">
</div>
<div class="textbox1">
    <i class="fas fa-home"></i>
    <input type="text" value="<?php echo $address ;?>" name="address">
</div>
<div class="textbox1">
    <i class="fas fa-piggy-bank"></i>
    <input type="number" value="<?php echo $balance ?>"  name="balance">
    <input type="hidden" name="id" value="<?php echo $id ;?>" />
</div>
  <input type="submit" class="btn1" value="Update info">
 </form>               
</div>


        </div>
</body>
</html>