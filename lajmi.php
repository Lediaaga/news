<?php
include ("lajme_form.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>lajmi</title>

   
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  
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

  <!-- <div id="menu-btn" class="fas fa-bars"></div> -->

</section>


<div class="heading" style="background:url(img/news.jpg) no-repeat">
   <h1>lajmi je ti</h1>
</div>


<section class="booking">

   <h1 class="heading-title">shto dhe ti lajmin tend</h1>

   <form method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>emer:</span>
            <input type="text" placeholder="shkruaj emrin" name="emer">
         </div>
         <div class="inputBox">
            <span>mbiemer:</span>
            <input type="text" placeholder="shkruaj mbiemrin" name="mbiemer">
         </div>
         <div class="inputBox">
            <span>telefon:</span>
            <input type="number" placeholder="shkruaj numrin e telefonit" name="telefon">
         </div>

         <div class="inputBox">
            <span>email:</span>
            <input type="text" placeholder="shkruaj adresen e email" name="email">
         </div>
         <div class="inputBox">
            <span>data :</span>
            <input type="date" name="data">
         </div>
         <div class="inputBox">
            <span>shkruaj lajmin:</span>
            <input type="text" name="lajmi">
         </div>
         <div>
         <div class="inputBox">
            <span>vendndodhja e lajmit</span>
            <select name="address" >
               <option>Zgjidh qytetin</option>
               <option>Tirane</option>
               <option>Durres</option>
               <option>Berat</option>
               <option>Shkoder</option>
               <option>Vlore</option>
               <option>Fier</option>
               <option>Elbasan</option>
               <option>Kukes</option>
               <option>Tropoje</option>
               <option>Diber</option>

					
						
      
      </div>
      <input type="submit" value="submit" class="btn" name="send">
     

   </form>

</section>

<?php
if(isset($_POST['send'])){
   $emer = $_POST['emer'];
   $mbiemer = $_POST['mbiemer'];
   $telefon = $_POST['telefon'];
   $email = $_POST['email'];
   $data = $_POST['data'];
   $lajmi = $_POST['lajmi'];

   $request = " insert into lajme_form(emer, mbiemer, telefon, email, data, lajmi) values('$emer','$mbiemer','$telefon','$email','$data','$lajmi') ";
   mysqli_query($connection, $request);

   header('location:lajmi.php'); }
   
?>


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

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>