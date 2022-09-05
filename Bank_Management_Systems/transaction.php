<?php
  $username=$_GET['username'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/transaction.css">
  </head>
  <body onbeforeunload="return cancel()">
    <div class="bg-container-contact100" style="background-image: url(images/bg-01.jpg);">
    </div>
    
    <div class="container-contact100">
      <div class="wrap-contact100">
        
        <div class="contact100-form-title" style="background-image: url(images/bg-02.jpg)">
          <span>Transaction</span>
        </div>
    
        <form action="addtransaction.php" method="POST" form name="RegForm">
          <div class="wrap-input100 validate-input">
            <input id="name" class="input100" type="text" name="IFSC" placeholder="IFSC Code" required>
            <span class="focus-input100"></span>
            <label class="label-input100" for="name">
            </label>
          </div>
    
          <form class="contact100-form validate-form">
            <div class="wrap-input100 validate-input">
              <input id="name" class="input100" type="text" name="bname" placeholder="Benificiary name" required>
              <span class="focus-input100"></span>
              <label class="label-input100" for="name">
              </label>
            </div>
              
              <div class="wrap-input100 validate-input">
              <input id="amount" class="input100" type="number" name="amount" placeholder="Amount" required>
              <span class="focus-input100"></span>
              <label class="label-input100" for="number">
              </label>
            </div>
    
            <div class="wrap-input100 validate-input">
              <input id="number" class="input100" type="number" name="accnumber" placeholder=" Account number">
              <span class="focus-input100"></span>
              <label class="label-input100" for="number">
              </label>
            </div>
            <div class="wrap-input100 validate-input">
              <input id="number" class="input100" type="number" name="accnumbers" placeholder=" Confirm Account number">
              <span class="focus-input100"></span>
              <label class="label-input100" for="number">
              </label>
            </div>
            <div class="wrap-input100 validate-input">
              <input onclick="myfunction()" style="background-color: #EEE9FC" id="submit" class="input100" type="submit" name="submit" >
                <input type="hidden" name="username" value="<?php echo $username ;?>" />
              <span class="focus-input100"></span>
              <label class="label-input100" for="submit">
              </label>
            </div>
             <a onclick="cancel()" href="index.html">Cancel</a>
            </form>
          </form>
      </div>
    </div>
    <script>
     function myfunction(){
         var accnumber = document.forms["RegForm"]["accnumber"];
          var accnumbers = document.forms["RegForm"]["accnumbers"];
          var IFSC = document.forms["RegForm"]["IFSC"];
          var name = document.forms["RegForm"]["name"];
          var amount = document.forms["RegForm"]["amount"];
        
              
              if(accnumber == accnumbers){
              
            window.alert("Your transaction has been completed.");  
             return true;
          }else{
              window.alert("Account numbers do not match");
              header("Location:login.php");
              return false;
              
              
          }
         
     }
//     function cancel(){
//       return(" Are you sure you want to leave the page ?")
//     }
    </script>
 </body>
</html>

