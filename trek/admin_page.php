<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_admin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <script src="https://kit.fontawesome.com/5726df07f3.js"></script>
        <title>admin page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
   <style>
   header{
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(adminbg.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
}
</style>

    </head>

    <body>
        <header>

<div class="main">
    <div class="logo">
            <img src="logo.png">

    </div>
    <ul class="firstUL" style="margin-top: 25px;">
        <li class="active"><a href="#">Admin</a></li>
        <li><a href="logout.php">logout</a></li>
        <li><a href="adminregister.php">register</a></li>
        <li><a href="feedbackdetailsadmin.php">feedback_details</a>             
        <li><a href="userdetails.php">User details</a></li>
        <li><a href="developers.php">Paid details</a></li>
            
                   
            </ul></li>
    </ul>
</div>
<div class="container">

   <div class="content">
   </br></br></br></br></br></br></br></br></br></br>
<h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>

 </div>

</div>  

      
    

</body>
</html>
