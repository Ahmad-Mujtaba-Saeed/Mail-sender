
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Now</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/signlogin.css">
</head>
<body style="background-image: url(imgs/logo/03062020113817AM-shutterstock_1417347668.jpg); object-fit: cover; background-repeat: no-repeat; background-size: cover;">

    
       
<section class="signupform">
    <form action="./includes/resetpwd.inc.php" method="post">
        <h2>Send Email!</h2>
        <p>An email will be send to your email
</p>
		<hr>
        
        <div class="inputfield">
            <input type="text" name="Email" placeholder="Enter your Email address"  required="required">
        </div>
                         
     <div class="signupsubmit"><br>
        <button type="Submit" name="reset-request">Send Email</button>
    </div>

<?php
if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo "<p class='color1'>Please fill all the fields</p>";
    }
    elseif($_GET["error"] == "loginwrong"){
        echo "<p class='color1'>the login information is wrong</p>";
    }
    elseif($_GET["error"] == "wrongpwd"){
        echo "<p class='color1'>The Given password is wrong</p>";
    }
  
    
}
?>
<style>
#togglePassword {
  border: none;
  background-color: transparent;
  cursor: pointer;
}

.remmeber{
position: relative;
top: -20px;
left: 20px;
}
	.color1{
color: red;
	}
</style>
    </form>
</section>

</body>
</html>