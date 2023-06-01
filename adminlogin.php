<?php
include ("lajme_form.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>adminlogin</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<section class="header">

<a href="kreu.php" class="logo">shqip news</a>

<nav class="navbar">
      <a href="kreu.php">kreu</a>
      <a href="aktualitet.php">aktualitet</a>
      <a href="politike.php">politike</a>
      <a href="lajmi.php">pjese e lajmit</a>
      <a href="adminlogin.php">admin login</a>
   </nav>

</section> 
<section class="adminlogin">
<form method="post" class="input">

      <div class="flex">
         <div class="inputBox">
            <span>Username</span>
            <input type="text" placeholder="Shkruani username-in tuaj" name="name">
         </div>
         <div class="inputBox">
            <span>Password:</span>
            <input type="password" placeholder="Shkruani passwordin tuaj" name="password">
         </div>
         <button type="submit" id="loginbtn" name="loginbtn" class="submit-btn">Hyr</button>
        </form>
    </div>
</section>

<?php

if(isset($_POST['loginbtn']))
{
    $uname = mysqli_real_escape_string($connection,$_POST['name']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".md5($password)."'";
        $result = mysqli_query($connection,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['AdminLoginId'] = $_POST['name'];
            header('Location: adminpanel.php');
       }else{
             echo"<script>alert('Password i pasakte!');</script>";
        }
       

    }
}

?>
</body>


<section class="footer">

<div class="box-container">

   <div class="box">
      <h3>quick links</h3>
      <a href="kreu.php"> <i class="fas fa-angle-right"></i> kreu</a>
      <a href="aktualitet.php"> <i class="fas fa-angle-right"></i> aktualitet</a>
      <a href="politike.php"> <i class="fas fa-angle-right"></i> politike</a>
      <a href="lajmi.php"> <i class="fas fa-angle-right"></i> showbizz</a>
   </div>

   <div class="box">
      <h3>contact info</h3>
      <a href="#"> <i class="fas fa-phone"></i> +355 00 00 000 </a>
      <a href="#"> <i class="fas fa-phone"></i> +355 11 11 111 </a>
      <a href="#"> <i class="fas fa-envelope"></i> shqipnews@gmail.com </a>
      <a href="#"> <i class="fas fa-map"></i> tirana, albania </a>
   </div>

   <div class="box">
      <h3>follow us</h3>
      <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
      <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
   </div>

</div>

<div class="credit"> created by <span>Epoka University</span> | all rights reserved! </div>

</section>