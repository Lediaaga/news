<?php
include ("lajme_form.php");
if(!isset($_SESSION['AdminLoginId'])){
   header("location:adminlogin.php");
   die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>adminpanel</title>


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

</section> 
<div><h1 class="a1">MIRE SE ERDHET NE ADMIN PANEL-<?php echo $_SESSION['AdminLoginId']?> </h1></div>


<div class="table-responsive">
   <h1 class="a2">KREDENCIALET E PERDORUESIT:</h1>
    <table id="customers">
        <tbody>
       <?php
       //get results from database
       $result = mysqli_query($connection,"SELECT * FROM lajme_form");
       $all_property = array();  //declare an array for saving property

       //showing property
       echo '<table id="customers">
        <tr class="data-heading">';  //initialize table tag
       while ($property = mysqli_fetch_field($result)) {
           echo '<td>' . $property->name . '</td>';  //get field name for header
           array_push($all_property, $property->name);  //save those to array
       }
       echo '</tr>'; //end tr tag

       //showing all data
       while ($row = mysqli_fetch_array($result)) {
           echo "<tr>";
           foreach ($all_property as $item) {
               echo '<td>' . $row[$item] . '</td>'; //get items using property value
           }
           echo '</tr>';
       }
       echo "</table>";

       ?>
        </tbody>
    </table>
</div>
</main>
</div>
</div>

    


<?php


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