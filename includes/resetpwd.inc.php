<?php
if(isset($_POST["reset-request"])){


    $url = "https://docs.google.com/spreadsheets/d/1pCMcbvpyzgOosjgKRuwhL0cSWe2nUrMlhKlu7YBLahM/edit#gid=1403956203";

    require '../PHPMailer/index.php';

    $user_email = $_POST["Email"];
  
    $to = $user_email;

    $subject = 'High Authority Blogs for Paid Guest Posting.';

    $message = '<h2 style="background-color: red; color:black; 

    padding-top:20px;
    text-align:center;
    marginbottom:-20px;
    padding-bottom:20px;
    ">Hi,<br>
   <div style="padding-left:-30px;"> Hope You Are Doing Well.<div>
    </h2>';

    $message .= '<div style="
    padding-top:20px;
padding-left:10px;
    background-color: Black;
    color:white !important;
    font-size:20px;
    font-weight:500;
    "><center>I am an SEO specialist and I will help you to increase your authority and backlink profile through link building or guest posting. I can provide you with the websites according to your budget and your requirements at reasonable prices. Check a few of my websites below. <br> 
  
   <a href="'.$url.'"><button 
   style="
   margin-top:17px;
  
   background-color: Red;
   color:white;
   padding:15px;
   padding-left:38px;
   padding-right:38px;
   border: 1px solid lightgray;
   border-radius:5px;
   "
   >Click ME!</button></a>
  

   
    <br><br>
    OR click on this link : <br>
    <a href="'. $url . '">'.$url.'</a>
    <br><Br>
  
  We have more than 13k Unique websites with organic traffic. 
     <br>Looking forward to hearing from you soon.<br>
Thanks!

<br><br>

WhatsApp:       +92 3233080997
<br>
Technology Inc.  All rights reserved.
<br><br></center>
</div>
    '; 
    $header = "From: Thetopbloggers <ahmadmujtabap72@gmail.com> \r\n";
    $header .= "Reply-To: ahmadmujtabap72@gmail.com \r\n";
    $header .= "Content-type: text/html\r\n";


    mmail($to ,$subject , $message ,$header );
    header("location: ../resetpass.php?error=succes");
}
else{
    header("location: ../index.php?error=idk");
    
}