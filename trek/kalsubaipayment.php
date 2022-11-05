<?php

@include 'config.php';
session_start();
if(isset($_REQUEST['submit'])){

   $name = $_REQUEST['nameoncard'];
   $card = $_REQUEST['cardtype'];
   $total = $_REQUEST['total'];
   $tourname = $_REQUEST['tour_name'];
   
   
   
   
         $insert = "INSERT INTO payment(nameoncard, total, tour_name, cardtype) VALUES('$name','$total','$tourname','$card')";
         
         pg_query($con, $insert);
         
         $_SESSION['nameoncard'] = $name;
         $_SESSION['paymenttype'] = $card;
         $_SESSION['paid'] = $total;
         $_SESSION['tour'] = $tourname;         
         header('location:Payment21.php');
  
   

};


?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Payment</title>
<style>
  
.headmenu
{
    padding-top: 10px;
    width: 100%;
    height: 100px;
    background-size: 50% 50%;
    background-color:blue; 
}

.headmenu img
{
    padding-left: 50px;
    padding-top: 10px;
    width: 10%;
    height: 80px;
}

.headmenu1 
{
    float: right;
    color: white;
    padding-top: 40px;
    padding-right: 40px;
    font-size: 20px;
}
.caption
    {
        margin-top: 30px;
        margin-left: 50px;
        letter-spacing: 2px;
    }
.form
    {
        margin-top: 20px;
    }
.form input[type=text],input[type=email]
{
        font-family: 'Open Sans',sans-serif;
        padding: 10px;
        width: 200px;
        height: 30px;
        background: rgb(248, 248, 248);
        border: 1px solid darkgray;
        justify-content: center;
} 

.form input[type=submit]
    {
        font-family: 'Open Sans',sans-serif;
        width: 100px;
        height: 50px;
        color: gray;
        background: rgb(248, 248, 248);
        border: 1px solid red;
        justify-content: center;  
    }

.menu
    {
        margin-top: 50px;
    }
.menu h3
    {
        font-family: 'Open Sans',sans-serif;
        font-size: 25px;
        font-weight: bold;
    }
.img
    {
        float: right;
        margin-right: 250px;
        padding-top: 50px;
    }
form label
    {
        margin-left: 200px;
        float: left;
        width: 150px;
        font-family: 'Open Sans',sans-serif;
        font-size: 15px;
        letter-spacing: 1px;   
    }
form select
    {
        width: 200px;
        font-size: 15px;
        color: darkgrey;
        border: 1px solid black;
        padding-top: 5px;
        padding-bottom: 5px;
    }
form input
    { 
        padding-right: 10px;
        font-size: 15px;
        color: darkgrey;
        border: 1px solid black;
        padding-top: 5px;
        padding-bottom: 5px;
    }
.Expiry select
    {
        width: 100px;
    }
form input[type="submit"]
    {
        margin-left: 350px;
        cursor: pointer;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 0px;
        background-color: mediumblue;
        color: white;
        margin-top: 10px;
    }
form input[type="reset"]
    {
        cursor: pointer;
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: mediumblue;
        color: white;
    }
</style>
</head>
<body>
<div class="headmenu" >
<img src="logo.png">
<div class="headmenu1">
<i class="fa fa-map-marker">  Secure Payment with advance security<br></i>
</div>
</div>
<div class="caption">
*KINDLY ENTER YOUR DETAILS BELOW:   
</div>
<form action="" method = "POST">
<center>
<input type="text" id="Title" name="Title" list="datalist1" placeholder="Title"> 
            <datalist id="datalist1"> 
                <option value="Mr"> 
                <option value="Mrs"> 
                <option value="Miss"> 
               </datalist>
<input type="text" name="FirstName" id="FirstName"  placeholder="First Name" required/>
<input type="text" name="LastName" id="LastName" placeholder="Last Name" required/>
<input type="email" name="Email" id="Email" placeholder="Email"pattern="^[a-z0-9](\.?[a-z0-9])@gmail\.com$" required/>
<input type="text" name="ContactNumber" id="ContactNumber" placeholder="Contact Number"pattern="[0-9]{10}" required/>

</center>

<div class="menu">
<center>
<h3>Make Payment</h3>
<hr width="1000" color="mediumblue"><br><br><br>
</center>
</div>
<div class="img">
<img src="Payment.jpg" width="400" height="300">
</div>

<label>Card Type</label>
<select name="cardtype">
<option value="Credit">Credit</option>
<option value="Debit">Debit</option>
</select><br><br><br>
<label>Card Number</label>
<input type="password" id="cardnumber" value="" required/><br><br><br>
<label>Name On Card</label>
<input type="text" name = "nameoncard" id="nameoncard" required/><br><br><br>
<div class="Expiry">
<label>Expiry Date</label>
<select required>
<option selected disabled>Month</option>
<option value="1">1</option>
<option value="1">2</option>
<option value="1">3</option>
<option value="1">4</option>
<option value="1">5</option>
<option value="1">6</option>
<option value="1">7</option>
<option value="1">8</option>
<option value="1">9</option>
<option value="1">10</option>
<option value="1">11</option>
<option value="1">12</option>
</select>

<select required>
<option selected disabled>Year</option>
<option value="1">2020</option>
<option value="1">2021</option>
<option value="1">2022</option>
<option value="1">2023</option>
<option value="1">2024</option>
<option value="1">2025</option>
<option value="1">2026</option>
<option value="1">2027</option>
<option value="1">2028</option>
<option value="1">2029</option>
<option value="1">2030</option>
</select><br><br><br>
</div>
<label>CVV Number</label>
<input type="password" id="cvvnumber" required/><br><br><br>
<!--<labe>NO, OF ROOMS</labe>-->
<!--<select required>
<option selected disabled>Month</option>
<option value="1">1</option>
<option value="1">2</option>
</select>-->
<label>Total Amount</label>
<input type="text" name="total" id="totalamount" value="Rs.7000" readonly>
<label></label>

</br>

<label>Tour destination</label>
<input type="text" name="tour_name" id="tour_name" value="Kalsubai trek" readonly>
<label></label>
<h1>                                                 </h1><a href="PaymentSuccessful.html"><input type="submit" id="submit" name="submit" value="Make Payment"></a>
<input type="reset" id="resetform" value="Reset Form">
</form>
</body>
</html>
