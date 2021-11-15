<?php
//inisialisasi session
session_start();
 
//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}
 
?>
 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>BEAUTE | Your Beauty In Little Things</title>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../image/logo_kecil.jpeg" alt="" width="35" height="35" class="d-inline-block align-text-top">
      BEAUTE
    </a>
  </div>
</nav>
 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../pages/homepage.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../pages/produk.html">Product</a>
        </li>
      </ul>
        <ul class="navbar-nav ml-auto pt-2 pb-2">
            <li class="nav-item ml-4">
                <a href="../pages/logout.php" class="nav-link text-black"> Log Out </a>
            </li>
        </ul>
      </form>
    </div>
  </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../image/logo.jpg" class="d-block w-100" alt="..." style="height: 75vh;">
      <div class="carousel-caption d-none d-md-block" style="color : black;">
        <h5>BEAUTE Skincare</h5>
        <p>Your Beauty in Little Things</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../image/2.jpg" class="d-block w-100" alt="..."style="height: 75vh;">
      <div class="carousel-caption d-none d-md-block" style="color : black;">
        <h5>Beauty in Jar </h5>
        <p>We share our products in jar</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../image/4.jpg" class="d-block w-100" alt="..."style="height: 75vh;">
      <div class="carousel-caption d-none d-md-block" style="color : black;">
        <h5>Love Every Skin Type</h5>
        <p>Every Skin Type is Beauty Inside</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<br>
<section>
  <h2><center>ABOUT US</center></h2>
  <br>
  <br>
  <div class="about-us" style="display: grid; grid-template-columns: auto auto; grid-template-rows: auto auto; grid-gap: 3px;padding: 10px; text-align: center; background-color: #f0d6ce ;">
    <div>
      <p><b>YOUR ONLINE BEAUTY DESTINATION</b></p>
      <p>BEAUTE is Indonesia's trusted and most complete online shopping destination offering authentic beauty products e.g. make up, skin care, hair care, fragrance and beauty tools serving women across Indonesia.</p>
    </div>
    <div>
      <p><b>DELIVERY GUARANTEED</b></p>
      <p>Excellent service is shopping necessity. With our own storage facility, BEAUTE ensures that product delivery is performed smoothly and product return can be completed hassle-free.</p>
    </div>
    <div>
      <p><b>ONLY THE AUTHENTIC AND BPOM CERTIFIED</b></p>
      <p>Quality and authenticity of beauty product is akin to the importance of taking care of your own skin, a necessity to all women and BEAUTE takes it very seriously. Usage of non-original or fraudulent beauty products could lead to permanent skin damage.</p>
      <p>This has prompted Sociolla to collaborate directly with authorized national distributors and brand owners in Indonesia to ensure that every product you purchase from BEAUTE are original and authentic, with the certification from Badan Pengawas Obat dan Makanan (‘BPOM’).</p>
      <p>Quality assurance of product storage is performed directly by BEAUTE's own operations management with compliance to international standards and storage guideline by the brand owners.</p>
    </div>
    <div>
      <p><b>YOUR DAILY READ OF ALL THINGS BEAUTY</b></p>
      <p>Inspired to be your trusted beauty advisor, BEAUTE presents you the Beauty Journal, an online beauty media portal dedicated for women to explore and develop their own unique beauty style, while receiving the latest information on trend and brand developments.</p>
      <p>We hope you enjoy your shopping experience with BEAUTE.</p>
    </div>
  </div>
</section>
<br>
<br>
<section>
  <div class="footer" style="display: grid; grid-template-columns: auto auto ;grid-gap: 3px;padding: 10px; text-align: center; " >
    <div>
    <img src="../image/logo_kecil.jpeg" width="100">
    <p>BEAUTE | Your Beauty In Little Things</p>
    </div>
    <div>
      <img src="../image/instagram.png" width="30">: @beaute.id
      <p>Tiara Salsa Ghina</p>
      <p>Ilmu Komputer 2020</p>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>