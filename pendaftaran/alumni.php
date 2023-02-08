<?php
require '../fungsi.php';
$t = date('M-Y');

$result = mysqli_query($conn,"SELECT * FROM alumni  ORDER BY id DESC LIMIT 1");
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=n" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandhelFriendly" content="true">
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title>Alumni</title>
     <style>
   @media (max-width: 575.98px) { 
 body{
 height: 3260px;
 }
     }
    </style>
  </head>
  <body>    
     <!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
<div class="wow zoomIn row justify-content-center isi mx-auto">
      <div class="col-md-4">
        <div class="container">
          <div class="inneralumni">
            <div class="content">
             <span><?=$row["tawar1"];?></span>
              <h2><?=$row["kategori1"];?></h2>
            </div>
            <div class="lower">
              <img src="img/trophy.png" class="image" alt="" />
              <ul class="features-list">
                <br><br>
                <li><b><?=$row["tingkat1"];?></b></li>
                <li><?=$row["tingkata1"];?></li>
                <li><?=$row["tingkatb1"];?></li>
                <li><?=$row["tingkatc1"];?></li>
                <li><?=$row["harga1"];?></li>
              </ul>
            </div>
          </div>
          <a href="form.php?no=1&pen=alumni"><button class="cta"><p><b>Ambil Kelas <?=$row["kategori1"];?></b></p></button></a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container">
          <div class="inneralumni">
            <div class="content">
              <span><?=$row["tawar2"];?></span>
              <h2><?=$row["kategori2"];?></h2>
            </div>
            <div class="lower">
              <img src="img/trophy.png" class="image" alt="" />
              <ul class="features-list">
                <br><br>
                <li><b><?=$row["tingkat2"];?></b></li>
                <li><?=$row["tingkata2"];?></li>
                <li><?=$row["tingkatb2"];?></li>
                <li><?=$row["tingkatc2"];?></li>
                <li><?=$row["harga2"];?></li>
              </ul>
            </div>
          </div>
          <a href="form.php?no=2&pen=alumni"><button class="cta"><p><b>Ambil Kelas <?=$row["kategori2"];?></b></p></button></a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container">
          <div class="inneralumni">
            <div class="content">
              <span><?=$row["tawar3"];?></span>
              <h2><?=$row["kategori3"];?></h2>
            </div>
            <div class="lower">
              <img src="img/trophy.png" class="image" alt="" />
              <ul class="features-list">
                <br><br>
                <li><b><?=$row["tingkat3"];?></b></li>
                <li><?=$row["tingkata3"];?></li>
                <li><?=$row["tingkatb3"];?></li>
                <li><?=$row["tingkatc3"];?></li>
                <li><?=$row["harga3"];?></li>
              </ul>
            </div>
          </div>
          <a href="form.php?no=3&pen=alumni"><button class="cta"><p><b>Ambil Kelas <?=$row["kategori3"];?></b></p></button></a>
        </div>
      </div>
    </div>
     <!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->

      <script src="JQuery3.3.1.js"></script>  
    <script src="script.js"></script>
    <script src="main.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
  </body>
</html>