<?php
include ("lajme_form.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>kreu</title>

 
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


<section class="aktualitet">


<div class="heading" style="background:url(img/home1.jpg) no-repeat">
         
         </div>


</section>


<section class="services">

   <h1 class="heading-title"> te tjera</h1>

   <div class="box-container">

      <div class="box">
         <img src="img/icon1.png" alt="">
         <h3>lajmi i fundit</h3>
      </div>

      <div class="box">
         <img src="img/icon2.png" alt="">
         <h3>sondazhe</h3>
      </div>

      <div class="box">
         <img src="img/icon3.png" alt="">
         <h3>kembimi valutor</h3>
      </div>

      <div class="box">
         <img src="img/icon4.png" alt="">
         <h3>horoskopi ditor</h3>
      </div>

   </div>

</section>


<section class="home-about">
<div class="content">
   <h3>aktualitet</h3>
<?php 
   $request = "select * from lajme_form order by data desc";
   $resLajme = mysqli_query($connection, $request);
      
   while ($lajm = $resLajme->fetch_assoc()) {
      
      echo "<div class='image'></div>

         <p>".$lajm["Lajmi"]. "</p>
         <a href='aktualitet.php' class='btn'>Me shume aktualitet</a>";
   }
   
   ?>
   </div>
   </section>



<section class="home-packages">

   <h1 class="heading-title"> Me te lexuarat e dites </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="img/lajm2.jpeg" alt="">
         </div>
         <div class="content">
            <h3>“Do të ndihmoj të marrësh bono thesari”/ Kush është “mashtruesja profesioniste” që i mori 230 mijë euro shoqes së saj</h3>
            <p>Finalizohet nga strukturat hetimore të DVP Tiranë, operacioni policor i koduar “Last fraud”.  Iu mori disa herë, shuma të mëdha parash, 3 shtetasve (familjarë), duke i mashtuar se do t’i ndihmonte në një proces gjyqësor, kapet dhe vihet në pranga 30-vjeçarja. Nga hetimet e thelluara dokumentohet dhe një rast i marrjes së shumës 230 000 euro nga kjo shtetase, me anë të mashtrimit. Strukturat hetimore të DVP Tiranë, në vijim të punës për goditjen e paligjshmërive, kanë organizuar dhe finalizuar operacionin policor të koduar “Last fraud”, si rezultat i të cilit u bë ndalimi i shtetases M. D., 30 vjeçe, banuese në Tiranë. Gjithashtu u shpallën në kërkim shtetasit A. V., Sh. V. dhe H. V. (babai dhe dy djemtë), të tre banues në Shkodër. Kjo shtetase iu ka marrë në mënyrë të përsëritur, shuma të mëdha parash, shtetasve A. V., Sh. V. dhe H. V., duke i premtuar se do t’i ndihmonte ata në një proces gjyqësor.Në vijim të veprimeve u shpallën në kërkim shtetasit A. V., Sh. V. dhe H. V., pasi me vetëgjyqësi kanë kanosur shtetasen M. D., për kthimin e parave. Nga veprimet e thelluara hetimore është dokumentuar edhe një rast tjetër mashtrimi i kryer nga shtetasja M. D.,e cila gjatë një viti, i ka marrë në total rreth 230 000 euro, një shtetaseje, duke i premtuar se do t’i investonte paratë në bono thesari. Materialet i kaluan Prokurorisë pranë Gjykatës së Shkallës së Parë të Juridiksionit të Përgjithshmëm Tiranë, për veprime të mëtejshne procedurale.</p>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/lajm3.jpeg" alt="">
         </div>
         <div class="content">
            <h3>I shpëtoi skllavërisë, e reja në “mision” për të shpëtuar sa më shumë mes 50 milion të bllokuarve në të gjithë botën</h3>
            <p>Kur Nasreen ishte vetëm një fëmijë i vogël, ajo pa motrën e saj 12-vjeçare të detyruar të martohej dhe nëna e saj e paralajmëroi se ajo do të ishte e ardhmja.Në moshën rreth nëntë vjeç, me ndihmën e një kushëriri mashkull, ajo u largua nga fshati i saj i vogël rural nepalez – ajo nuk mund të thotë saktësisht sa vjeç ishte sepse lindja e saj nuk u regjistrua kurrë.Ajo mbërriti në Katmandu, kryeqyteti i Nepalit pa asgjë – madje as një mbiemër – dhe kaloi 15 orë në ditë duke u përpjekur aqsa i rridhte djersa në fund të këmbëve për krijuar veshje në një ndërmarrje që më vonë do të dërgoheshin në dyqanet e mëdha në vendet e pasura.Natën, ajo binte në gjumë mbi grumbujt e rrobave dhe ëndërronte se ku do të përfundonin.“Po kërkoja lirinë dhe një jetë më të mirë dhe përfundova si një fëmijë që bënte punë të detyruar, në një nga këto dhoma të vogla në një fabrikë tekstili me gjashtë të tjerë. Ambienti ishte rregulluar lirshëm, pa dritare dhe dyer të mbyllura”, tha ajo për Sky News.Nasreen përfundimisht i shpëtoi ciklit të skllavërisë me ndihmën e një mentori dhe mori mbiemrin Sheikh – që në arabisht përkthehet si ‘Shefi i fisit’. Tani ajo punon si bashkëdrejtoreshë e Empowerment Collective, një grup me bazë në SHBA që ndihmon në çrrënjosjen e skllavërisë moderne duke u dhënë grave të margjinalizuara mbështetjen dhe aftësitë që u nevojiten për të siguruar vetë-mjaftueshmërinë dhe dinjitetin e tyre.</p>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="img/lajm4.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Gjermania kritikon Hungarinë për bllokimin e ndihmës për Ukrainën</h3>
            <p>Ministri gjerman i Mbrojtjes, Boris Pistorius, ka kritikuar Hungarinë për bllokimin e ndihmës shtesë ushtarake për Ukrainën, gjatë një takimi të ministrave të Mbrojtjes të bllokut evropian që u mbajt të martën në Bruksel.Pritorius tha se ai ishte “i zhgënjyer apo i irrituar nga sjellja e miqve tanë hungarezë” për shkak të bllokimit të ndihmës.Kjo lëvizje vjen pasi Ukraina përfshiu bankën më të madhe hungareze, OTP, në listën e mbështetësve të pushtimit të Rusisë, duke shkaktuar zemërim në Budapest.Një zëdhënës i Qeverisë hungareze tha të hënën se Hungaria do të refuzonte miratimin e çdo ndihme të re ushtarake deri kur banka OTP të hiqet nga lista.Budapesti në veçanti po bllokon rritjen e Fondit Evropian të Paqes, një fond ndërqeveritar që rimburson shtetet e BE-së që ofrojnë ndihmë ushtarake për partnerët e bllokut.Agjencia kombëtare ukrainase për Parandalimin e Korrupsionit në fillim të majit e vendosi bankën OTP në listën e sponsorëve të luftës, duke argumentuar se prania e kësaj banke në Rusi, edhe pas nisjes së pushtimit, qartësisht ishte mbështetje për këtë luftë që Moska nisi kundër Ukrainës në shkurt të vitit të kaluar.Pas takimit, kryediplomati i BE-së, Josep Borrell, tha se shpreson që “çdo pengesë të tejkalohet” në mënyrë që të miratohet ndihma për Ukrainën.Ai tha se shumica e shteteve anëtare të bllokut janë për rritjen e fondit me 3.5 miliardë euro shtesë.</p>
      </div>

   </div>

</section>

<section class="home-offer">
   <div class="content">
      <h3>Shkruaj dhe ti lajmin tend!</h3>
      <a href="lajmi.php" class="btn">Login</a>
   </div>
</section>


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